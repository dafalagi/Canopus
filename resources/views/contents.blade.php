<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <a href="/">Home</a>
    @foreach ($contents as $content)
        <article>
            <h1><a href="/contents/{{ $content->slug }}">{{ $content->title }}</a></h1>
            <p>{{ $content->excerpt }}</p>
        </article>
    @endforeach
</body>
</html>