@extends('dashboard.layouts.main')

@section('body')
    {{-- Main Form --}}
    <form action="/dashboard/contents" method="POST" enctype="multipart/form-data">
        @csrf
        @php
            if(session('oldData'))
            {
                $oldData = session('oldData');
            }
        @endphp
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required
            value="{{ old('title', $oldData['title'] ?? false) }}" 
            {{ $errors->hasAny('body', 'category', 'coordinate', 'distance', 'event', 'mainpicture', 'trivia') ||
            session()->has('picturesinvalid') ? '' : 'autofocus' }}
            aria-describedby="titleFeedback">
            @if ($errors->has('title'))
                <div id="titleFeedback" class="invalid-feedback">
                    {{ $errors->first('title') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category" class="form-select @error('category') is-invalid @enderror" @error('category') autofocus @enderror
            aria-describedby="categoryFeedback">
                <option value="Planet" {{ old('category', $oldData['category'] ?? false) == 'Planet' ? 'selected' : '' }}>Planet</option>
                <option value="Bintang" {{ old('category', $oldData['category'] ?? false) == 'Bintang' ? 'selected' : '' }}>Bintang</option>
                <option value="Rasi Bintang" {{ old('category', $oldData['category'] ?? false) == 
                'Rasi Bintang' ? 'selected' : '' }}>Rasi Bintang</option>
                <option value="Lainnya di Angkasa" {{ old('category', $oldData['category'] ?? false) == 
                'Lainnya di Angkasa' ? 'selected' : '' }}>Lainnya di Angkasa</option>
            </select>
            @if ($errors->has('category'))
                <div id="categoryFeedback" class="invalid-feedback">
                    {{ $errors->first('category') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Main Details (Introduction)</label>
            <input id="intro" type="hidden" name="intro" value="{{ old('intro', $oldData['intro'] ?? false) }}" 
            @error('intro') class="is-invalid" @enderror aria-describedby="introFeedback">
            <trix-editor input="intro"></trix-editor>
            @if ($errors->has('intro'))
                <div id="introFeedback" class="invalid-feedback">
                    {{ $errors->first('intro') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">History</label>
            <input id="history" type="hidden" name="history" value="{{ old('history', $oldData['history'] ?? false) }}" 
            @error('history') class="is-invalid" @enderror aria-describedby="historyFeedback">
            <trix-editor input="history"></trix-editor>
            @if ($errors->has('history'))
                <div id="historyFeedback" class="invalid-feedback">
                    {{ $errors->first('history') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Coordinate</label>
            <input type="text" class="form-control @error('coordinate') is-invalid @enderror" name="coordinate" 
            value="{{ old('coordinate', $oldData['coordinate'] ?? false) }}" @error('coordinate') autofocus @enderror 
            aria-describedby="coordinateFeedback">
            @if ($errors->has('coordinate'))
                <div id="coordinateFeedback" class="invalid-feedback">
                    {{ $errors->first('coordinate') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Distance</label>
            <input type="text" class="form-control @error('distance') is-invalid @enderror" name="distance" 
            value="{{ old('distance', $olData['distance'] ?? false) }}" @error('distance') autofocus @enderror 
            aria-describedby="distanceFeedback">
            @if ($errors->has('distance'))
                <div id="distanceFeedback" class="invalid-feedback">
                    {{ $errors->first('distance') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Event</label>
            <select name="event" class="form-select @error('event') is-invalid @enderror" @error('event') autofocus @enderror
            aria-describedby="eventFeedback">
                <option value="" {{ old('event', $oldData['event'] ?? false) == '' ? 'selected' : '' }}>-</option>
                <option value="Merkurius" {{ old('event', $oldData['event'] ?? false) == 'Merkurius' ? 'selected' : '' }}>Merkurius</option>
                <option value="Venus" {{ old('event', $oldData['event'] ?? false) == 'Venus' ? 'selected' : '' }}>Venus</option>
                <option value="Bumi" {{ old('event', $oldData['event'] ?? false) == 'Bumi' ? 'selected' : '' }}>Bumi</option>
                <option value="Mars" {{ old('event', $oldData['event'] ?? false) == 'Mars' ? 'selected' : '' }}>Mars</option>
                <option value="Jupiter" {{ old('event', $oldData['event'] ?? false) == 'Jupiter' ? 'selected' : '' }}>Jupiter</option>
                <option value="Saturnus" {{ old('event', $oldData['event'] ?? false) == 'Saturnus' ? 'selected' : '' }}>Saturnus</option>
                <option value="Uranus" {{ old('event', $oldData['event'] ?? false) == 'Uranus' ? 'selected' : '' }}>Uranus</option>
                <option value="Neptunus" {{ old('event', $oldData['event'] ?? false) == 'Neptunus' ? 'selected' : '' }}>Neptunus</option>
                <option value="Ceres" {{ old('event', $oldData['event'] ?? false) == 'Ceres' ? 'selected' : '' }}>Ceres</option>
                <option value="Eris" {{ old('event', $oldData['event'] ?? false) == 'Eris' ? 'selected' : '' }}>Eris</option>
                <option value="Pluto" {{ old('event', $oldData['event'] ?? false) == 'Pluto' ? 'selected' : '' }}>Pluto</option>
                <option value="Makemake" {{ old('event', $oldData['event'] ?? false) == 'Makemake' ? 'selected' : '' }}>Makemake</option>
                <option value="Haumea" {{ old('event', $oldData['event'] ?? false) == 'Haumea' ? 'selected' : '' }}>Haumea</option>
            </select>
            @if ($errors->has('event'))
                <div id="eventFeedback" class="invalid-feedback">
                    {{ $errors->first('event') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="mainpicture" class="form-label">Main Picture</label>
            <input class="form-control @error('mainpicture') is-invalid @enderror" type="file" id="mainpicture" name="mainpicture" 
            @error('mainpicture') autofocus @enderror aria-describedby="mainpictureFeedback">
            @if ($errors->has('mainpicture'))
                <div id="mainpictureFeedback" class="invalid-feedback">
                    {{ $errors->first('mainpicture') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="pictures[]" class="form-label">Additional Pictures (Optional)</label>
            <input class="form-control multiple @if(session()->has('picturesinvalid')) is-invalid @endif" 
            type="file" id="pictures[]" name="pictures[]" @if(session()->has('picturesinvalid')) autofocus @endif 
            multiple aria-describedby="validationPicturesFeedback">
            @if (session()->has('picturesinvalid'))
                <div id="validationPicturesFeedback" class="invalid-feedback">
                    {{ session('picturesinvalid') }}
                </div>
            @endif
        </div>
        <div class="mb-4">
            <label class="form-label">Trivia</label>
            <input type="text" class="form-control @error('trivia') is-invalid @enderror" name="trivia" 
            value="{{ old('trivia', $oldData['trivia'] ?? false) }}" required @error('trivia') autofocus @enderror 
            aria-describedby="triviaFeedback">
            @if ($errors->has('trivia'))
                <div id="triviaFeedback" class="invalid-feedback">
                    {{ $errors->first('trivia') }}
                </div>
            @endif
        </div>
        <div class="mb-5 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection