<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\Content;
use App\Models\Discuss;
use App\Models\Report;
use Illuminate\Support\Facades\Schema;

class DashboardReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.reports.index', [
            'reports' => Report::all(),
            'columns' => Schema::getColumnListing('reports'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
        $validated = $request->validated();

        if($validated['content_title'] ?? false)
        {
            $content = Content::where('title', $validated['content_title'])->first()->toArray();
            $validated['content_id'] = $content['id'];
        }
        if($validated['discuss_title'] ?? false)
        {
            $discuss = Discuss::where('title', $validated['discuss_title'])->first()->toArray();
            $validated['discuss_id'] = $discuss['id'];
        }
        
        $validated['user_id'] = auth()->user()->id;

        Report::create($validated);

        return redirect('/dashboard/reports')->with('success', 'Data Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('dashboard.reports.show', [
            'report' => $report,
            'columns' => Schema::getColumnListing('reports')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return view('dashboard.reports.edit', [
            'report' => $report
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        $validated = $request->validated();

        if($validated['content_title'])
        {
            $content = Content::where('title', $validated['content_title'])->first()->toArray();
            if($content['id'] != $report->content_id)
            {
                $validated['content_id'] = $content['id'];
            }
        }else
        {
            $validated['content_id'] = null;
        }
        if($validated['discuss_title'])
        {
            $discuss = Discuss::where('title', $validated['discuss_title'])->first()->toArray();
            if($discuss['id'] != $report->discuss_id)
            {
                $validated['discuss_id'] = $discuss['id'];
            }
        }else
        {
            $validated['discuss_id'] = null;
        }
        if(auth()->user()->id != $report->user_id)
        {
            $validated['user_id'] = auth()->user()->id;
        }

        unset($validated['content_title']);
        unset($validated['discuss_title']);

        Report::where('id', $report->id)->update($validated);

        return redirect('/dashboard/reports')->with('success', 'Data Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        Report::destroy($report->id);

        return redirect('/dashboard/reports')->with('success', 'Data Deleted Successfully!');
    }
}
