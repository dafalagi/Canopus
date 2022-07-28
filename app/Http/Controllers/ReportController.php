<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Http\Requests\StoreReportRequest;
use App\Models\Content;
use App\Models\Discuss;

class ReportController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
        $validated = $request->validated();

        if($validated['content_title'] ?? false)
        {
            $content = Content::where('title', $validated['content_title'])->first();
            $validated['content_id'] = $content->id;
        }
        if($request->input('values'))
        {
            $validated['values'] = $request->input('values');
        }else
        {
            return back()->with([
                'error' => 'Laporan tidak boleh kosong!',
                'oldData' => $validated
            ]);
        }
        
        $validated['user_id'] = auth()->user()->id;

        Report::create($validated);

        return back()->with('success', 'Laporan kamu berhasil dibuat! Terima kasih telah berkontribusi!');
    }
}
