<?php

namespace App\Http\Controllers;

use App\Models\Discuss;
use App\Http\Requests\StoreDiscussRequest;
use App\Http\Requests\UpdateDiscussRequest;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Report;
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
            'discusses' => Discuss::orderBy('created_at', 'desc')
                           ->filter(request('search'))
                           ->with('user', 'comments', 'likes')
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
            'comments' => $discuss->comments->sortDesc()->load('user'),
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
        if($discuss->picture)
        {
            Storage::delete($discuss->picture);
        }

        Discuss::destroy($discuss->id);
        Favorite::where('discuss_id', $discuss->id)->delete();
        Report::where('discuss_id', $discuss->id)->delete();
        Comment::where('discuss_id', $discuss->id)->delete();

        return redirect('/discusses')->with('success', 'Diskusi kamu berhasil dihapus!');
    }

    // Show answered discusses
    public function answer()
    {
        return view('pages.forum', [
            'discusses' => Discuss::orderBy('comments.created_at', 'desc')
                            ->join('comments', 'discusses.id', '=', 'comments.discuss_id')
                            ->where('comments.user_id', auth()->user()->id)
                            ->groupBy('discuss_id')
                            ->with('user', 'comments', 'likes')
                            ->paginate(5)->withQueryString(),
            'all' => Discuss::with('user', 'comments', 'likes')->get()
        ]);
    }

    // Show my discusses
    public function myDiscusses()
    {
        return view('pages.forum', [
            'discusses' => Discuss::orderBy('created_at', 'desc')
                           ->where('user_id', auth()->user()->id)
                           ->with('user', 'comments', 'likes')
                           ->paginate(5)->withQueryString(),
        ]);
    }
}
