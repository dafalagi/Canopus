@extends('dashboard.layouts.main')

@section('body')
    {{-- Error Alert --}}
    @if ($errors->hasAny('content_title', 'discuss_title'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>
                {{ $errors->first('content_title') }}
                {{ $errors->first('discuss_title') }}
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Main Form --}}
    <form action="/dashboard/favorites/{{ $favorite->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">Content Title</label>
            <input type="text" class="form-control @error('content_title') is-invalid @enderror" name="content_title"
            value="{{ old('content_title', $favorite->content->title ?? false) }}" 
            @if ($errors->hasAny('discuss_title'))
            @else
                autofocus
            @endif>
        </div>
        <div class="mb-3">
            <label class="form-label">Discuss Title</label>
            <input type="text" class="form-control @error('discuss_title') is-invalid @enderror" name="discuss_title" 
            value="{{ old('discuss_title', $favorite->discuss->title ?? false) }}" @error('discuss_title') autofocus @enderror>
        </div>
        <div class="mb-5 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection