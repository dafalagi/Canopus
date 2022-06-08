@extends('dashboard.layouts.main')

@section('body')
    @foreach ($columns as $column)
        <div class="mb-3">
            <span>{{ $column }} : {{ $user->$column }}</span>
        </div>
    @endforeach
@endsection