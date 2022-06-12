@extends('dashboard.layouts.main')

@section('body')
    {{-- Error Alert --}}
    @if ($errors->hasAny('username', 'email', 'password', 'confirm_password', 'bio', 'is_admin'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>
                {{ $errors->first('username') }}
                {{ $errors->first('email') }}
                {{ $errors->first('password') }}
                {{ $errors->first('confirm_password') }}
                {{ $errors->first('bio') }}
                {{ $errors->first('is_admin') }}
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Main Form --}}
    <form action="/dashboard/users" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" 
            value="{{ old('username') }}" required 
            @if ($errors->hasAny('email', 'password', 'confirm_password', 'bio', 'is_admin'))
            @else
                autofocus
            @endif>
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
            value="{{ old('email') }}" required @error('email') autofocus @enderror>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
            required @error('password') autofocus @enderror>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" 
            required @error('confirm_password') autofocus @enderror>
        </div>
        <div class="mb-3">
            <label class="form-label">Bio</label>
            <input type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" 
            value="{{ old('bio') }}" @error('bio') autofocus @enderror>
        </div>
        <div class="mb-4">
            <label class="form-label">Is Admin?</label>
            <select name="is_admin" class="form-select @error('is_admin') is-invalid @enderror" @error('is_admin') autofocus @enderror>
                @if (old('is_admin') == 1)
                    <option value="1" selected>True</option>
                    <option value="0">False</option>
                @else
                    <option value="1">True</option>
                    <option value="0" selected>False</option>
                @endif
            </select>
        </div>
        <div class="mb-5 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection