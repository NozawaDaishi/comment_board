<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Laravelについて語る｜新規投稿</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <dl>
            <dt>タイトル</dt>
            <dd><input type="text" name="title"></dd>
            <dt>投稿者</dt>
            <dd><input type="text" name="name"></dd>
            <dt>コメント</dt>
            <dd><textarea name="comment"></textarea></dd>
        </dl>
        <button type="submit">投稿する</button>
    </form>
    <hr>
    <a href="/">戻る</a>
</body>
</html>
