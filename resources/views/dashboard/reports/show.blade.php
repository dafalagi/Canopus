@extends('dashboard.layouts.main')

@section('body')
    @foreach ($columns as $column)
        <div class="mb-3">
            <span>{!! $column !!} : {!! $report->$column !!}</span>
        </div>
    @endforeach
@endsection