@extends('layouts.contents')
@section('head')
@section('title','検索結果')
@endsection

@section('header')

@endsection

@section('main')

{{ $messages }}
<div class="wrapper">
    <div id="messages">
        <div id="message">
            <ul>
                @foreach($messages as $message)
                <li>{$message -> content}</li>
                @endforeach
            </ul>
        </div>
    <form action="/messages" method="post">
        @csrf
        <input type="hidden" value="{{ $item_id }}">
        <input type="text" id="messages_text" name="messagesContent">
        <input type="submit" id="messages_btn" value="送信">
    </form>
    </div>
</div>




@endsection