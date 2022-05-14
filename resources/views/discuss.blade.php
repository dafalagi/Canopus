<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <a href="/forum">Back</a>
    <h1>{{ $title }}</h1>
    <p>By {{ $author }}</p>
    <p>{{ $body }}</p>
    <br>
    <p>Comment : {{ count($comments) }}</p>
    @foreach ($comments as $comment)
        <h5>{{ $comment->user->username }}</h5>
        <p>{{ $comment->body }}</p>
        <p>Likes : {{ $comment->likes }}</p>
        <p>Dislikes : {{ $comment->dislikes }}</p>
    @endforeach
    <p>Score : {{ $score }}</p>
</body>
</html>