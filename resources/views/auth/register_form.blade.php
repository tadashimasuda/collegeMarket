@extends('layouts.contents')
@section('header')
@endsection
@section('main')
<div class="wrapper">
    <div id="login_form">
        <h2 id="register_titie">新規作成</h2>
        <form method="POST" id="register_form" action="{{ route('register') }}">
            @csrf
            <div class="div_register_form">
                <label for="name" class="account_register_label">{{ __('Name') }}</label>

                <div class="register_input">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="div_register_form">
                <label for="register_email" class="account_register_label">{{ __('E-Mail Address') }}</label>

                <div class="register_input">
                    <input id="register_email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="div_register_form">
                <label for="password" class="account_register_label">{{ __('Password') }}</label>

                <div class="register_input">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="div_register_form">
                <label for="password-confirm" class="account_register_label">{{ __('Confirm Password') }}</label>
                <div class="register_input">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="div_register_form">
                <label for="user_img" class="account_register_label"> {{ __('ユーザー画像')}}</label>
                <div class="register_input">
                    <input id="user_img" type="file" class="form-control" name="user_img">
                </div>
            </div>

            <div class="div_register_form">
                <label for="register_college" class="account_register_label">{{ __('大学名') }}</label>
                <div class="register_input">
                    <select name="college" id="register_college">
                        <option value="1">北京大学</option>
                        <option value="2">北京第二大学</option>
                        <option value="3">北京農業大学</option>
                        <option value="0">その他</option>
                    </select>
                </div>
            </div>

            <div class="div_register_form mb-0">
                <div class="register_input offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('登録') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection