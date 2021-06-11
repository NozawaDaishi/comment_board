@extends('layouts.app')

@section('content')

@include('commons.nav')
<div class="container mt-5">
    <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
            <h1 class="text-center"><a class="text-dark" href="/">Comment Board</a></h1>
            <div class="card mt-3">
                <div class="card-body text-center">
                    <h2 class="h3 card-title text-center mt-2">ログイン</h2>

                    @include('commons.flash')

                    <div class="card-text">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="md-form">
                                <label for="email">メールアドレス</label>
                                <input class="form-control" type="email" id="email" name="email" required>
                            </div>
                            <div class="md-form">
                                <label for="password">パスワード</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                            <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ログイン</button>
                        </form>

                        <div class="mt-0">
                            <a href="{{ route('register') }}" class="card-text">会員登録はこちら</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
