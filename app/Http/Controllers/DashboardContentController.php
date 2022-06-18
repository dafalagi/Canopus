<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentRequest;
use App\Http\Requests\UpdateContentRequest;
use App\Models\Content;
use App\Models\Favorite;
use App\Models\Report;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DashboardContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.contents.index', [
            'contents' => Content::filter(request('search'))->get(),
            'columns' => Schema::getColumnListing('contents'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContentRequest $request)
    {
        $validated = $request->validated();

        $validated['slug'] = SlugService::createSlug(Content::class, 'slug', $validated['title']);
        $validated['excerpt'] = Str::limit(strip_tags($validated['body']), 200, '...');

        Content::create($validated);

        return redirect('/dashboard/contents')->with('success', 'Data Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return view('dashboard.contents.show', [
            'content' => $content,
            'columns' => Schema::getColumnListing('contents')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        return view('dashboard.contents.edit', [
            'content' => $content
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContentRequest $request, Content $content)
    {
        if($request->title != $content->title)
        {
            $add = $request->validate([
                'title' => 'required|unique:contents|min:5'
            ]);
            $validated = $request->safe()->merge($add)->toArray();
            $validated['slug'] = SlugService::createSlug(Content::class, 'slug', $validated['title']);
        }else
        {
            $validated = $request->validated();
        }
        if($request->body != $content->body)
        {
            $validated['excerpt'] = Str::limit(strip_tags($validated['body']), 200, '...');
        }
        
        Content::where('id', $content->id)->update($validated);

        return redirect('/dashboard/contents')->with('success', 'Data Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        Content::destroy($content->id);
        Favorite::where('content_id', $content->id)->delete();
        Report::where('content_id', $content->id)->delete();

        return redirect('/dashboard/contents')->with('success', 'Data Deleted Successfully!');
    }
}
