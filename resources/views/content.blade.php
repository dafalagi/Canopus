<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $content->title }}</title>
</head>
<body>
    <h1>{{ $content->title }}</h1>
    <p>{!! $content->body !!}</p>
    <img src="https://source.unsplash.com/1200x400?space" alt="">
    <a href="/contents">Back</a>
</body>
</html>