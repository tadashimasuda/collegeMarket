@extends('layouts.contents')
@section('head')
@section('title','ダイレクトメッセージ')
@endsection

@section('header')

@endsection

@section('main')
<div class="wrapper">
    <div id="messages">
        <div id="message">
            <ul>
                @empty(!$messages)
                    @foreach($messages as $message)
                        @if($message->sender_id == Auth::id())
                            <li>
                                <p class="message_send">{{$message->content}}</p>
                            </li>
                        @else
                           <li>
                               <p class="message_recieve">{{ $message -> content }}</p>
                           </li>
                        @endif
                        
                    @endforeach
                @endempty
            </ul>
        </div>
    <form action="/messages" method="post" id="messages_form">
        @csrf
        <input type="hidden" name="itemId" value="{{ $item_id }}">
        <input type="text" id="messages_text" name="messagesContent" placeholder="メッセージを入力してください">
        <input type="submit" id="messages_btn" value="送信">
    </form>
    </div>
</div>
@endsection