<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <p><a href="/">Back</a></p>
    @foreach ($discusses as $discuss)
        <h1><a href="/discusses/{{ $discuss->slug }}">{{ $discuss->title }}</a></h1>
        <p>{{ $discuss->user->name }} {{ $discuss->created_at->diffForHumans() }}</p>
        <p>{{ $discuss->created_at->format('j F Y') }}</p>
        <p>{!! $discuss->excerpt !!}</p>
    @endforeach
</body>
</html>