@extends('dashboard.layouts.main')

@section('body')
    {{-- Error Alert --}}
    @if ($errors->hasAny('body', 'discuss_title', 'likes'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>
                {{ $errors->first('body') }}
                {{ $errors->first('discuss_title') }}
                {{ $errors->first('likes') }}
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Main Form --}}
    <form action="/dashboard/comments" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Discuss Title</label>
            <input type="text" class="form-control @error('discuss_title') is-invalid @enderror" name="discuss_title" 
            value="{{ old('discuss_title') }}" 
            @if ($errors->hasAny('body', 'likes'))
            @else
                autofocus
            @endif>
        </div>
        <div class="mb-3">
            <label class="form-label">Comment Details (Body)</label>
            <input id="body" type="hidden" name="body" value="{{ old('body') }}" autofocus>
            <trix-editor input="body"></trix-editor>
        </div>
        <div class="mb-4">
            <label class="form-label">Likes</label>
            <input type="text" class="form-control @error('likes') is-invalid @enderror" name="likes" 
            value="{{ old('likes') }}" @error('likes') autofocus @enderror>
        </div>
        <div class="mb-5 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection