<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Http\Requests\StoreLikeRequest;

class LikeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function discuss(StoreLikeRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;

        Like::create($validated);

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function comment(StoreLikeRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;

        Like::create($validated);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        Like::destroy($like->id);

        return back();
    }
}
