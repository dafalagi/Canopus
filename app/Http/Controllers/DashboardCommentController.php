<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Discuss;
use Illuminate\Support\Facades\Schema;

class DashboardCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.comments.index', [
            'comments' => Comment::filter(request('search'))->get(),
            'columns' => Schema::getColumnListing('comments')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        $validated = $request->validated();

        $discuss = Discuss::where('title', $validated['discuss_title'])->first();

        $validated['discuss_id'] = $discuss->id;
        $validated['user_id'] = auth()->user()->id;

        Comment::create($validated);

        return redirect('/dashboard/comments')->with('success', 'Data Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return view('dashboard.comments.show', [
            'comment' => $comment,
            'columns' => Schema::getColumnListing('comments')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('dashboard.comments.edit', [
            'comment' => $comment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $validated = $request->validated();

        $discuss = Discuss::where('title', $validated['discuss_title'])->first();

        if($discuss->id != $comment->discuss_id)
        {
            $validated['discuss_id'] = $discuss->id;
        }
        if(auth()->user()->id != $comment->user_id)
        {
            $validated['user_id'] = auth()->user()->id;
        }

        unset($validated['discuss_title']);

        Comment::where('id', $comment->id)->update($validated);

        return redirect('/dashboard/comments')->with('success', 'Data Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        Comment::destroy($comment->id);

        return redirect('/dashboard/comments')->with('success', 'Data Deleted Successfully!');
    }
}
