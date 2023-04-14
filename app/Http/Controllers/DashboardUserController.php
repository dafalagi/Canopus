<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Comment;
use App\Models\Discuss;
use App\Models\Favorite;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use PDO;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.users.index', [
            'users' => User::filter(request('search'))->get(),
            'columns' => Schema::getColumnListing('users'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
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

        if($request->file('avatar'))
        {
            $validated['avatar'] = $request->file('avatar')->store('user-avatars');
        }

        User::create($validated);
        
        return redirect('/dashboard/users')->with('success', 'Data Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.users.show', [
            'user' => $user,
            'columns' => Schema::getColumnListing('users')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
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
        $validated = $this->validateUpdateUsernameOrEmail($request, $user);
        $validated = $this->validateUpdatePassword($user, $validated);
        $validated = $this->validateUpdateAvatar($request, $user, $validated);

        User::where('id', $user->id)->update($validated);

        return redirect('/dashboard/users')->with('success', 'Data Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->avatar)
        {
            Storage::delete($user->avatar);
        }

        User::destroy($user->id);
        Discuss::where('user_id', $user->id)->delete();
        Favorite::where('user_id', $user->id)->delete();
        Comment::where('user_id', $user->id)->delete();
        Report::where('user_id', $user->id)->delete();
        
        return redirect('/dashboard/users')->with('success', 'Data Deleted Successfully!');
    }

    public function validateUpdateUsernameOrEmail(UpdateUserRequest $request, User $user){
        if($request->username != $user->username && $request->email != $user->email)
        {
            $validated = $this->validateUpdateUsernameAndEmail($request);
        }else if($request->username != $user->username)
        {
            $validated = $this->validateUpdateUsername($request);
        }else if($request->email != $user->email)
        {
            $validated = $this->validateUpdateEmail($request);
        }else
        {
            $validated = $request->validated();
        }

        return $validated;
    }

    public function validateUpdateUsernameAndEmail(UpdateUserRequest $request){
        $validated = $request->validate([
            'username' => 'required|unique:users|string|min:6|max:30',
            'email' => 'required|unique:users|email:dns',
        ]);

        $validated = $request->safe()->merge($validated)->toArray();

        return $validated;
    }

    public function validateUpdateUsername(UpdateUserRequest $request){
        $validated = $request->validate([
            'username' => 'required|unique:users|string|min:6|max:30',
        ]);

        $validated = $request->safe()->merge($validated)->toArray();

        return $validated;
    }

    public function validateUpdateEmail(UpdateUserRequest $request){
        $validated = $request->validate([
            'email' => 'required|unique:users|email:dns',
        ]);

        $validated = $request->safe()->merge($validated)->toArray();

        return $validated;
    }

    public function validateUpdatePassword(User $user, array $validated){
        if(isset($validated['password']))
        {
            if(!Hash::check($validated['currentPassword'], $user->password))
            {
                return back()->with('error', 'Current password is incorrect!');
            }

            $validated['password'] = Hash::make($validated['password']);
            unset($validated['currentPassword']);
            unset($validated['confirm_password']);
        }else
        {
            unset($validated['password']);
        }

        return $validated;
    }

    public function validateUpdateAvatar(UpdateUserRequest $request, User $user, array $validated){
        if($request->file('avatar'))
        {
            if($user->avatar)
            {
                Storage::delete($user->avatar);
            }

            $validated['avatar'] = $request->file('avatar')->store('user-avatars');
        }

        return $validated;
    }
}
