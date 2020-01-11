<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<body>
    <h2>Posts</h2>

    <ul>
        @foreach ($posts as $post)
            <li>
                <img src="{{ $post->featured_image }}" alt="image">
                <a href="{{ route('posts.show', $post->slug) }}"><h3>{{ $post->title }}</h3></a>
                <p>{{ $post->summary }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
