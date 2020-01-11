<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tag</title>
</head>
<body>
    <h2>Tag: {{ $data['slug'] }}</h2>

    <ul>
        @foreach ($data['posts'] as $post)
            <li>
                <a href="{{ route('posts.show', $post->slug) }}"><h3>{{ $post->title }}</h3></a>
            </li>
        @endforeach
    </ul>
</body>
</html>
