<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use App\Models\Content;
use App\Models\Discuss;
use App\Models\Favorite;
use Illuminate\Support\Facades\Schema;

class DashboardFavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.favorites.index', [
            'favorites' => Favorite::filter(request('search'))->without('user', 'content', 'discuss')->get(),
            'columns' => Schema::getColumnListing('favorites'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.favorites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavoriteRequest $request)
    {
        $validated = $request->validated();

        if($validated['content_title'] ?? false)
        {
            $content = Content::where('title', $validated['content_title'])->first();
            $validated['content_id'] = $content->id;
        }
        if($validated['discuss_title'] ?? false)
        {
            $discuss = Discuss::where('title', $validated['discuss_title'])->first();
            $validated['discuss_id'] = $discuss->id;
        }
        
        $validated['user_id'] = auth()->user()->id;

        Favorite::create($validated);

        return redirect('/dashboard/favorites')->with('success', 'Data Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(Favorite $favorite)
    {
        return view('dashboard.favorites.show', [
            'favorite' => $favorite,
            'columns' => Schema::getColumnListing('favorites')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        return view('dashboard.favorites.edit', [
            'favorite' => $favorite
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFavoriteRequest $request, Favorite $favorite)
    {
        $validated = $request->validated();

        if($validated['content_title'])
        {
            $content = Content::where('title', $validated['content_title'])->first();
            if($content->id != $favorite->content_id)
            {
                $validated['content_id'] = $content->id;
            }
        }else
        {
            $validated['content_id'] = null;
        }
        if($validated['discuss_title'])
        {
            $discuss = Discuss::where('title', $validated['discuss_title'])->first();
            if($discuss->id != $favorite->discuss_id)
            {
                $validated['discuss_id'] = $discuss->id;
            }
        }else
        {
            $validated['discuss_id'] = null;
        }
        if(auth()->user()->id != $favorite->user_id)
        {
            $validated['user_id'] = auth()->user()->id;
        }

        unset($validated['content_title']);
        unset($validated['discuss_title']);

        Favorite::where('id', $favorite->id)->update($validated);

        return redirect('/dashboard/favorites')->with('success', 'Data Edited Successfully!');
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

        return redirect('/dashboard/favorites')->with('success', 'Data Deleted Successfully!');
    }
}
