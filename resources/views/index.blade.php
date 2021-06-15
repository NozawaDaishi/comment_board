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
    @foreach ($posts as $post)
        <ul>
            <li>{{ $post->name }}：{{ $post->title }}   posted at {{ date('Y-m-d H:i:s', $post->created_at)}}</li>
        </ul>
    @endforeach
</body>
</html>
