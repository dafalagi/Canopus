@extends('dashboard.layouts.main')

@section('body')
    {{-- Main Form --}}
    <form action="/dashboard/reports/{{ $report->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">Content Title</label>
            <input type="text" class="form-control @error('content_title') is-invalid @enderror" name="content_title"
            value="{{ old('content_title', $report->content->title ?? false) }}" 
            @if ($errors->hasAny('discuss_title', 'comment_id'))
            @else
                autofocus
            @endif
            aria-describedby="content_titleFeedback">
            @if($errors->has('content_title'))
                <div class="invalid-feedback" id="content_titleFeedback">
                    {{ $errors->first('content_title') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Discuss Title</label>
            <input type="text" class="form-control @error('discuss_title') is-invalid @enderror" name="discuss_title" 
            value="{{ old('discuss_title', $report->discuss->title ?? false) }}" @error('discuss_title') autofocus @enderror
            aria-describedby="discuss_titleFeedback">
            @if($errors->has('discuss_title'))
                <div class="invalid-feedback" id="discuss_titleFeedback">
                    {{ $errors->first('discuss_title') }}
                </div>
            @endif
        </div>
        <div class="mb-4">
            <label class="form-label">Comment ID</label>
            <input type="text" class="form-control @error('comment_id') is-invalid @enderror" name="comment_id" 
            value="{{ old('comment_id', $report->comment_id) }}" @error('comment_id') autofocus @enderror
            aria-describedby="comment_idFeedback">
            @if($errors->has('comment_id'))
                <div class="invalid-feedback" id="comment_idFeedback">
                    {{ $errors->first('comment_id') }}
                </div>
            @endif
        </div>
        <div class="mb-5 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection