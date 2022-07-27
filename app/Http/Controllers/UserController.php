<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/login')->with('success', 'Akun kamu berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages.settings', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $username = $user->username;

        if($request->username && $request->email)
        {
            if($request->username != $user->username && $request->email != $user->email)
            {
                $add = $request->validate([
                    'username' => 'required|unique:users|string|min:6|max:30',
                    'email' => 'required|unique:users|email:dns',
                ]);
                $validated = $request->safe()->merge($add)->toArray();
                $username = $validated['username'];
            }else if($request->username != $user->username)
            {
                $add = $request->validate([
                    'username' => 'required|unique:users|string|min:6|max:30',
                ]);
                $validated = $request->safe()->merge($add)->toArray();
                $username = $validated['username'];
            }else if($request->email != $user->email)
            {
                $add = $request->validate([
                    'email' => 'required|unique:users|email:dns',
                ]);
                $validated = $request->safe()->merge($add)->toArray();
            }else
            {
                $validated = $request->validated();
            }
        }else
        {
            $validated = $request->validated();
        }
        if(isset($validated['password']))
        {
            if(!Hash::check($validated['currentPassword'], $user->password))
            {
                return back()->with('error', 'Password lamamu tidak sesuai!');
            }

            $validated['password'] = Hash::make($validated['password']);
            unset($validated['currentPassword']);
            unset($validated['confirm_password']);
        }
        if($request->file('avatar'))
        {
            if($user->avatar)
            {
                Storage::delete($user->avatar);
            }

            $validated['avatar'] = $request->file('avatar')->store('user-avatars');
        }

        User::where('id', $user->id)->update($validated);

        return redirect('/users/'.$username.'/edit')->with('success', 'Profil kamu berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        
        return redirect('/');
    }

    // Show login form
    public function login()
    {
        return view('pages.login', [
            'title' => 'Login',
        ]);
    }

    // Check user's credentials
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with([
            'error' => 'Email atau Password salah. Silakan cek kembali Email dan Password kamu!',
            'email' => $credentials['email'],
        ]);
    }

    // Log user out
    public function logout(Request $request)
    {  
        Auth::logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
