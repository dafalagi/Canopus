<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>HOMEPAGE</h1>
    <a href="/contents">Contents</a>
    <a href="/discusses">Forum</a>
    <a href="/users">Users</a>
    <a href="/test">Test</a>
    <a href="/footer">footer</a>
    @can('admin')
        <a href="/dashboard">Dashboard</a>
    @endcan
    @guest
        <a href="/login">Login</a>
        <a href="/register">Register</a>
        @else
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endguest
</body>
</html>