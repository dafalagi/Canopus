@extends('dashboard.layouts.main')

@section('body')
    <form action="/dashboard/users" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" autofocus>
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password">
        </div>
        <div class="mb-3">
            <label class="form-label">Bio</label>
            <input type="text" class="form-control" name="bio" value="{{ old('bio') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Is Admin?</label>
            <input type="text" class="form-control" name="is_admin" value="{{ old('is_admin') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection