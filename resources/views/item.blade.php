@extends('layouts.contents')
@section('head')
@section('title','商品詳細')
@endsection

@section('header')

@endsection

@section('main')
<div class="wrapper">
    <div id="item_detail">
        <h2 id="item_detail_title">{{ $item->title }}</h2>
        <div id="item_detail_img">
            <img src="/image/{{ $item->item_img }}" alt="">
        </div>
        <p id="item_detail_price">価格：{{$item->price}}円</p>
            <div id="item_detail_business_box">
                <a href="#" id="item_detail_business">購入する</a>
                <p>※価格交渉はコメント欄をご使用ください</p>
            </div>
        <div id="item_description_box">
            <p id='item_description_title'>商品詳細</p>
            <p id='item_description'>{{ $item -> item_description }}</p>
        </div>

        <div id="item_user_box">
            <!-- <h3 id="item_user_title">出品者情報</h3> -->
            <ul id="item_user">
                <li id="item_user_img">
                    <img src="/image/{{ $user->user_img }}" alt="">
                </li>
                <li id="item_user_name">
                    <a href="/user/{{ $user->id }}">{{ $user->name }}</p>
                </li>
            </ul>
            <p id="item_user_name_icon">></p>
        </div>
        <div id="item_detail_comment_box">
            <h3 id="item_detail_comment">コメント</h3>
            <div id="item_comment">
                <!-- foreachでコメント回す -->
                <ul id="comments">
                    @foreach($comments as $comment)
                        <li id="comment">
                            <img src="/image/" alt="" >
                            <p id="comment">{{$comment -> content }}</p>
                            <div class="clear_fix"></div>
                        </li>
                    @endforeach
                </ul>
            </div>
            @if(Auth::check())
                <form action="{{ url('comment')}}" id="item_comment_form" method="post">
                    @csrf
                    <input type="hidden" name="itemUserId" value="{{ $item->user_id }}">
                    <input type="hidden" name="itemId" value="{{ $item->id }}">
                    <input type="text" id="item_comment_text" name="itemComment" placeholder="コメントをご記入ください">
                    <input type="submit" id="item_comment_btn" value="送信">
                </form>
            @else
                <p>アカウントをお持ちでないとコメントはできません</p>
                <a href="/login_form">ログインする</a>
            @endif

        </div>
    </div>
</div>
@endsection