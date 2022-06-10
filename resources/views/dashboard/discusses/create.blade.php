@extends('dashboard.layouts.main')

@section('body')
    {{-- Error Alert --}}
    @if ($errors->hasAny('title', 'body', 'category', 'trivia', 'picture'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>
                {{ $errors->first('title') }}
                {{ $errors->first('body') }}
                {{ $errors->first('category') }}
                {{ $errors->first('picture') }}
                {{ $errors->first('trivia') }}
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Main Form --}}
    <form action="/dashboard/contents" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" 
            value="{{ old('title') }}" required 
            @if ($errors->hasAny('body', 'category', 'trivia', 'picture'))
            @else
                autofocus
            @endif>
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category" class="form-select @error('category') is-invalid @enderror" @error('category') autofocus @enderror>
                <option value="Planet" 
                    @if (old('category') == 'Planet')
                        selected
                    @endif>
                    Planet
                </option>
                <option value="Benda Langit Lain" 
                    @if (old('category') == 'Benda Langit Lain')
                        selected
                    @endif>
                    Benda Langit Lain
                </option>
                <option value="Istilah Angkasa"
                    @if (old('category') == 'Istilah Angkasa')
                        selected
                    @endif>
                    Istilah Angkasa
                </option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Content Details</label>
            <input id="body" type="hidden" name="body">
            <trix-editor input="body"></trix-editor>
        </div>
        <div class="mb-3">
            <label class="form-label">Picture</label>
            <input type="text" class="form-control @error('picture') is-invalid @enderror" name="picture" 
            value="{{ old('picture') }}" @error('picture') autofocus @enderror>
        </div>
        <div class="mb-3">
            <label class="form-label">Trivia</label>
            <input type="text" class="form-control @error('trivia') is-invalid @enderror" name="trivia" 
            value="{{ old('trivia') }}" required @error('trivia') autofocus @enderror>
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