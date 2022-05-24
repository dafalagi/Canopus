<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;

class FavoriteController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFavoriteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavoriteRequest $request)
    {
        //Store Favorite
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function showContents(User $user)
    {
        return view('favoriteContents', [
            'title' => $user->username,
            'favorites' => $user->favorites->sortDesc()->load('content'),
        ]);
    }

    public function showDiscusses(User $user)
    {
        return view('favoriteDiscusses', [
            'title' => $user->username,
            'favorites' => $user->favorites->sortDesc()->load('discuss'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFavoriteRequest  $request
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFavoriteRequest $request, Favorite $favorite)
    {
        //Update Favorite
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorite $favorite)
    {
        //Delete Favorite
    }
}
