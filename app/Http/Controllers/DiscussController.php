<?php

namespace App\Http\Controllers;

use App\Models\Discuss;
use App\Http\Requests\StoreDiscussRequest;
use App\Http\Requests\UpdateDiscussRequest;
use Clockwork\Request\Request;

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
            'discusses' => Discuss::latest()->search(request('search'))->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create Discuss Form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiscussRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiscussRequest $request)
    {
        //Store Discuss
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function show(Discuss $discuss)
    {
        return view('discuss', [
            'discuss' => $discuss,
            'comments' => $discuss->comments->sortByDesc('likes')->load('user'),
            'score' => $discuss->likes - $discuss->dislikes,
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
        //Edit Discuss Form
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
        //Update Discuss
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discuss $discuss)
    {
        //Delete Discuss
    }   
}
