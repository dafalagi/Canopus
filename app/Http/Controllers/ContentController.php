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
        return view('contents', [
            'title' => 'Samudera Angkasa',
            'contents' => Content::all(),
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
}
