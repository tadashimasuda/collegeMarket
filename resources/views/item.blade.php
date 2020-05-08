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
            <a href="#" id="item_detail_business">取引する</a>
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
                    <a href="#">{{ $user->name }}</p>
                </li>
            </ul>
            <p id="item_user_name_icon">></p>
        </div>
        <div id="item_detail_comment_box">
            <h3 id="item_detail_comment">コメント</h3>
            <div id="item_comment">
                <!-- foreachでコメント回す -->
            </div>
            <form action="#" id="item_comment_form" method="get">
                <input type="hidden" value="{{ $item->id }}">
                <input type="text" id="item_comment_text" placeholder="コメントをご記入ください">
                <input type="submit" id="item_comment_btn" value="送信">
            </form>
        </div>
    </div>
</div>

@endsection