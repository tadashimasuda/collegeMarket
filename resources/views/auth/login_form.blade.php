@extends('layouts.contents')
@section('head')
@section('title','検索結果')
@endsection

@section('header')

@endsection

@section('main')
<div class="wrapper">
    <div id="login_form">
        <h2 id="login_titie">ログイン</h2>
        <form action="#" id="twitter_form">
            <input type="submit" id="twitter_login" value="Twitterでログイン">
        </form>

        <form method="POST" action="#" id="account_login">
            <!-- action="{{ route('login') }} -->
            @csrf
            <table>
            <!-- <tr>
                <th><label for="email">メールアドレス</label></th>
            </tr> -->
            <tr>
                <th>
                    <input type="text" id="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </th>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </tr>
            <!-- <tr>
                <th>
                    <label for="password">パスワード</label>
                </th>
            </tr> -->
            <tr>
                <th>
                    <input id="password" type="password" name="password" placeholder="パスワード" required autocomplete="current-password">
                </th>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </tr>
            <!-- <tr>
                <th>
                    <label for="form-check">次回から自動ログインする</label>
                </th>
                <th>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                </th>
            </tr> -->
            <tr>
                <!-- <th><button>ログインする</button></th> -->
                <th><input type="submit" value="ログインする" id="submit_login"></th>
            </tr>
            </table>
        </form>
    </div>
</div>

@endsection