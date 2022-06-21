<?php

namespace App\Http\Controllers;

use App\Models\Content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.categoryList', [
            'contents' => Content::filter(request('search'))->get(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return view('content', [
            'content' => $content,
        ]);
    }

    public function category(Content $content)
    {
        return view('pages.categoryDetails', [
            'contents' => Content::where('category', $content->category)->get()
        ]);
    }
}
