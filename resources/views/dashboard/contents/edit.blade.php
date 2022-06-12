@extends('dashboard.layouts.main')

@section('body')
    {{-- Error Alert --}}
    @if ($errors->hasAny('title', 'body', 'category', 'coordinate', 'distance', 'event', 'mainpicture', 'pictures', 'trivia'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>
                {{ $errors->first('title') }}
                {{ $errors->first('body') }}
                {{ $errors->first('category') }}
                {{ $errors->first('coordinate') }}
                {{ $errors->first('distance') }}
                {{ $errors->first('event') }}
                {{ $errors->first('mainpicture') }}
                {{ $errors->first('pictures') }}
                {{ $errors->first('trivia') }}
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Main Form --}}
    <form action="/dashboard/contents/{{ $content->slug }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required
            value="{{ old('title', $content->title) }}" 
            {{ $errors->hasAny('body', 'category', 'coordinate', 'distance', 'event', 'mainpicture', 'pictures', 'trivia') ? '' : 'autofocus' }}>
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category" class="form-select @error('category') is-invalid @enderror" @error('category') autofocus @enderror>
                <option value="Planet" {{ old('category', $content->category) == 'Planet' ? 'selected' : '' }}>Planet</option>
                <option value="Bintang" {{ old('category', $content->category) == 'Bintang' ? 'selected' : '' }}>Bintang</option>
                <option value="Rasi Bintang" {{ old('category', $content->category) == 'Rasi Bintang' ? 'selected' : '' }}>Rasi Bintang</option>
                <option value="Lainnya di Angkasa" {{ old('category', $content->category) == 'Lainnya di Angkasa' ? 'selected' : '' }}>Lainnya di Angkasa</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Content Details (Body)</label>
            <input id="body" type="hidden" name="body" value="{{ old('body', $content->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <div class="mb-3">
            <label class="form-label">Coordinate</label>
            <input type="text" class="form-control @error('coordinate') is-invalid @enderror" name="coordinate" 
            value="{{ old('coordinate', $content->coordinate) }}" @error('coordinate') autofocus @enderror>
        </div>
        <div class="mb-3">
            <label class="form-label">Distance</label>
            <input type="text" class="form-control @error('distance') is-invalid @enderror" name="distance" 
            value="{{ old('distance', $content->distance) }}" @error('distance') autofocus @enderror>
        </div>
        <div class="mb-3">
            <label class="form-label">Event</label>
            <select name="event" class="form-select @error('event') is-invalid @enderror" @error('event') autofocus @enderror>
                <option value="" {{ old('event', $content->event) == '' ? 'selected' : '' }}>-</option>
                <option value="Merkurius" {{ old('event', $content->event) == 'Merkurius' ? 'selected' : '' }}>Merkurius</option>
                <option value="Venus" {{ old('event', $content->event) == 'Venus' ? 'selected' : '' }}>Venus</option>
                <option value="Bumi" {{ old('event', $content->event) == 'Bumi' ? 'selected' : '' }}>Bumi</option>
                <option value="Mars" {{ old('event', $content->event) == 'Mars' ? 'selected' : '' }}>Mars</option>
                <option value="Jupiter" {{ old('event', $content->event) == 'Jupiter' ? 'selected' : '' }}>Jupiter</option>
                <option value="Saturnus" {{ old('event', $content->event) == 'Saturnus' ? 'selected' : '' }}>Saturnus</option>
                <option value="Uranus" {{ old('event', $content->event) == 'Uranus' ? 'selected' : '' }}>Uranus</option>
                <option value="Neptunus" {{ old('event', $content->event) == 'Neptunus' ? 'selected' : '' }}>Neptunus</option>
                <option value="Ceres" {{ old('event', $content->event) == 'Ceres' ? 'selected' : '' }}>Ceres</option>
                <option value="Eris" {{ old('event', $content->event) == 'Eris' ? 'selected' : '' }}>Eris</option>
                <option value="Pluto" {{ old('event', $content->event) == 'Pluto' ? 'selected' : '' }}>Pluto</option>
                <option value="Makemake" {{ old('event', $content->event) == 'Makemake' ? 'selected' : '' }}>Makemake</option>
                <option value="Haumea" {{ old('event', $content->event) == 'Haumea' ? 'selected' : '' }}>Haumea</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Main Picture</label>
            <input type="text" class="form-control @error('mainpicture') is-invalid @enderror" name="mainpicture" 
            value="{{ old('mainpicture', $content->mainpicture) }}" @error('mainpicture') autofocus @enderror>
        </div>
        <div class="mb-3">
            <label class="form-label">Pictures (Additional)</label>
            <input type="text" class="form-control @error('pictures') is-invalid @enderror" name="pictures" 
            value="{{ old('pictures', $content->pictures) }}" @error('pictures') autofocus @enderror>
        </div>
        <div class="mb-4">
            <label class="form-label">Trivia</label>
            <input type="text" class="form-control @error('trivia') is-invalid @enderror" name="trivia" 
            value="{{ old('trivia', $content->trivia) }}" required @error('trivia') autofocus @enderror>
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