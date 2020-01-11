<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $data['post']->title }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/dracula.min.css" />
</head>
<body>
    <h2>{{ $data['post']->title }}</h2>

    <div>
        {!! $data['post']->body !!}
    </div>

    <div>
        <h3>Tags for this post</h3>
        @if ($data['post']->tags->count() > 0)
            <div>
                @foreach ($data['post']->tags as $tag)
                    <div>
                        <a href="{{ route('tag.posts.index', $tag->slug) }}">{{ $tag->name }}</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>
<script>
    (function(){
        hljs.initHighlightingOnLoad();
        let targets = document.querySelectorAll('pre')
        targets.forEach(target => {
          hljs.highlightBlock(target)
        })
    })();
</script>
</body>
</html>
