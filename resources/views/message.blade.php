@extends('layouts.contents')
@section('head')
@section('title','検索結果')
@endsection

@section('header')

@endsection

@section('main')

<div class="wrapper">
    <div id="messages">
        <div id="message">
            {{ $messages }}
            <ul>
                @foreach($messages as $message)
                    <li>{$message -> content}</li>
                @endforeach
            </ul>
        </div>
    <form action="/messages" method="post" id="messages_form">
        @csrf
        <input type="hidden" name="item_id" value="{{ $item_id }}">
        <input type="text" id="messages_text" name="messagesContent" placeholder="メッセージを入力してください">
        <input type="submit" id="messages_btn" value="送信">
    </form>
    </div>
</div>




@endsection