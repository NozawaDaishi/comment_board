@extends('layouts.app')

@section('content')

@include('commons.nav')

<div class="container mt-5">
    <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
            <h1 class="text-center"><a class="text-dark" href="/">Laravelについて語る</a></h1>
            <div class="card mt-3">
                <div class="card-body text-center">
                    <p class="card-text text-right mt-2 mb-2"><a href="{{ route('posts.create') }}"><i class="fas fa-pen mr-1"></i>新規作成</a></p>

                    <table class="table">
                        <thead>
                            <tr>
                                <th class="font-weight-bold">投稿者</th>
                                <th class="font-weight-bold">タイトル</th>
                                <th class="font-weight-bold">投稿日</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->name }}</a></td>
                                    <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                                    <td>posted at {{ $post->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
