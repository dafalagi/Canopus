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
        if($request->username != $user->username && $request->email != $user->email)
        {
            $add = $request->validate([
                'username' => 'required|unique:users|string|min:6|max:30',
                'email' => 'required|unique:users|email:dns',
            ]);
            $validated = $request->safe()->merge($add)->toArray();
            $validated['password'] = Hash::make($validated['password']);
        }else if($request->username != $user->username)
        {
            $add = $request->validate([
                'username' => 'required|unique:users|string|min:6|max:30',
            ]);
            $validated = $request->safe()->merge($add)->toArray();
            $validated['password'] = Hash::make($validated['password']);
        }else if($request->email != $user->email)
        {
            $add = $request->validate([
                'email' => 'required|unique:users|email:dns',
            ]);
            $validated = $request->safe()->merge($add)->toArray();
            $validated['password'] = Hash::make($validated['password']);
        }else
        {
            $validated = $request->validated();
            $validated['password'] = Hash::make($validated['password']);
        }

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
        User::destroy($user->id);
        Discuss::where('user_id', $user->id)->delete();
        Favorite::where('user_id', $user->id)->delete();
        Comment::where('user_id', $user->id)->delete();
        Report::where('user_id', $user->id)->delete();
        
        return redirect('/dashboard/users')->with('success', 'Data Deleted Successfully!');
    }
}
