<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Laravelについて語る</h1>
    <p><a href="{{ route('posts.create') }}">＋新規作成</a></p>
    @foreach ($posts as $post)
        <ul>
            <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->name }}：{{ $post->title }}</a>   posted at {{ $post->created_at }}</li>
        </ul>
    @endforeach
</body>
</html>
