@extends('layouts.app')

@section('content')

@include('commons.nav')
    <h1>Laravelについて語る｜更新画面</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('put')
        <dl>
            <dt>タイトル</dt>
            <dd><input type="text" name="title" value="{{ $post->title }}"></dd>
            <dt>投稿者</dt>
            <dd><input type="text" name="name" value="{{ $post->name }}"></dd>
            <dt>コメント</dt>
            <dd><textarea name="comment">{{ $post->comment }}</textarea></dd>
        </dl>
        <button type="submit">更新する</button>
    </form>
    <hr>
    <a href="/">戻る</a>

@endsection
