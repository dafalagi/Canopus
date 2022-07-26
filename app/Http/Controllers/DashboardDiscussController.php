<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscussRequest;
use App\Http\Requests\UpdateDiscussRequest;
use App\Models\Comment;
use App\Models\Discuss;
use App\Models\Favorite;
use App\Models\Report;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardDiscussController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.discusses.index', [
            'discusses' => Discuss::filter(request(['search']))->without('user', 'comments')->get(),
            'columns' => Schema::getColumnListing('discusses'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.discusses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiscussRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $validated['slug'] = SlugService::createSlug(Discuss::class, 'slug', $validated['title']);
        $validated['excerpt'] = Str::limit(strip_tags($validated['body']), 200, '...');

        if($request->file('picture'))
        {
            $validated['picture'] = $request->file('picture')->store('discuss-images');
        }

        Discuss::create($validated);

        return redirect('/dashboard/discusses')->with('success', 'Data Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function show(Discuss $discuss)
    {
        return view('dashboard.discusses.show', [
            'discuss' => $discuss,
            'columns' => Schema::getColumnListing('discusses'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function edit(Discuss $discuss)
    {
        return view('dashboard.discusses.edit', [
            'discuss' => $discuss
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiscussRequest $request, Discuss $discuss)
    {
        $validated = $request->validated();

        if(auth()->user()->id != $discuss->user_id)
        {
            $validated['user_id'] = auth()->user()->id;
        }
        if($request->title != $discuss->title)
        {
            $validated['slug'] = SlugService::createSlug(Discuss::class, 'slug', $validated['title']);
        }
        if($request->body != $discuss->body)
        {
            $validated['excerpt'] = Str::limit(strip_tags($validated['body']), 200, '...');
        }
        if($request->file('picture'))
        {
            if($discuss->picture)
            {
                Storage::delete($discuss->picture);
            }

            $validated['picture'] = $request->file('picture')->store('discuss-images');
        }

        Discuss::where('id', $discuss->id)->update($validated);

        return redirect('/dashboard/discusses')->with('success', 'Data Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discuss $discuss)
    {
        if($discuss->picture)
        {
            Storage::delete($discuss->picture);
        }
        Discuss::destroy($discuss->id);
        Favorite::where('discuss_id', $discuss->id)->delete();
        Report::where('discuss_id', $discuss->id)->delete();
        Comment::where('discuss_id', $discuss->id)->delete();

        return redirect('/dashboard/discusses')->with('success', 'Data Deleted Successfully!');
    }
}
