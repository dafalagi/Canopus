<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use App\Models\Content;
use App\Models\Discuss;

class FavoriteController extends Controller
{    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFavoriteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeContent(Content $content)
    {
        $data['content_id'] = $content->id;
        $data['user_id'] = auth()->user()->id;

        Favorite::create($data);

        return back();
    }

    public function storeDiscuss(Discuss $discuss)
    {
        $data['discuss_id'] = $discuss->id;
        $data['user_id'] = auth()->user()->id;

        Favorite::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('pages.favorites', [
            'favorites' => $user->favorites
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorite $favorite)
    {
        Favorite::destroy($favorite->id);

        return back();
    }
}
