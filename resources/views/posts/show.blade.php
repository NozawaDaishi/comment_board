<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Laravelについて語る｜投稿画面</h1>
    <dl>
        <dt>タイトル</dt>
        <dd>{{ $post->title }}</dd>
        <dt>投稿者</dt>
        <dd>{{ $post->name }}</dd>
        <dt>コメント</dt>
        <dd>{{ $post->comment }}</dd>
        <dt>投稿日</dt>
        <dd>{{ $post->created_at }}</dd>
    </dl>
    <a href="{{ route('posts.edit', $post->id) }}">修正する</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">削除する</button>
    </form>
    <hr>
    <a href="/">戻る</a>
</body>
</html>
