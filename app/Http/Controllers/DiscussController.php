<?php

namespace App\Http\Controllers;

use App\Models\Discuss;
use App\Http\Requests\StoreDiscussRequest;
use App\Http\Requests\UpdateDiscussRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DiscussController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.forum', [
            'discusses' => Discuss::orderBy('discusses.created_at', 'desc')
                           ->filter(request(['search', 'user', 'answer']))
                           ->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiscussRequest  $request
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

        return redirect('/discusses')->with('success', 'Diskusi kamu berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function show(Discuss $discuss)
    {
        return view('pages.discuss', [
            'discuss' => $discuss,
            'comments' => $discuss->comments->sortByDesc('likes'),
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
        return view('pages.editdiscuss', [
            'discuss' => $discuss
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiscussRequest  $request
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

        return back()->with('success', 'Diskusi kamu berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discuss $discuss)
    {
        Discuss::destroy($discuss->id);

        return redirect('/forum');
    }

    public function likes(Discuss $discuss)
    {
        $data['likes'] = $discuss->likes + 1;

        Discuss::where('id', $discuss->id)->update($data);

        return back();
    }

    public function dislikes(Discuss $discuss)
    {
        $data['dislikes'] = $discuss->dislikes + 1;

        Discuss::where('id', $discuss->id)->update($data);

        return back();
    }
}
