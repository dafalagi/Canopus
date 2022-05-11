<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}'s Favorites</title>
</head>
<body>
    <a href="/users">Back</a>
    @foreach ($favorites as $favorite)
        <h4><a href="/contents/{{ $favorite->discuss->slug }}">{{ $favorite->discuss->title }}</a></h4>
        <p>{{ $favorite->discuss->excerpt }}</p>
        <p>{{ $favorite->discuss->created_at->diffForHumans() }}</p>
        <hr>
    @endforeach
</body>
</html>