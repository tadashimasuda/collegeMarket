@extends('layouts.contents')
@section('head')
@section('title','検索結果')
@endsection

@section('header')

@endsection

@section('main')
<div class="wrapper">
    <div id="user_filed">
        <div id="user_img">
            <img src="" alt="">
        </div>
        <p id="user_name">{{ $user->name }}</p>
        @if(Auth::id() == $user->id)
        <a href="/item/register" id="user_item_btn">出品する</a>
        @endif
        <ul id="user_main_items">
            @foreach($user->items as $item)
            <li id="user_main_item">
                <div id="user_item_img">
                <img src="{{ asset('/storage/images/'.$item->item_img)}}" alt="">
                </div>
                <div id="_useritem_info">
                    <div id="item_title_box">
                        <a href="/item/show/{{ $item -> id }}" id="item_title">{{ $item->title }}</a>
                    </div>
                    <div id="item_like">
                        <!-- like -->
                        @if($item->userLike)
                            @if(Auth::id() == $item->userLike->user_id)
                                <a href="/item/unlike/{{ $item->id }}">
                                    <i class="fas fa-heart fa-lg like_btn_red"></i>
                                </a>
                            @else
                                <a href="/item/like/{{ $item->id }}">
                                    <i class="far fa-heart fa-lg like_btn"></i>
                                </a>
                            @endif
                        @else
                            <a href="/item/like/{{ $item->id }}">
                                <i class="far fa-heart fa-lg like_btn"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </li>
            @endforeach
            <div class="clear_fix"></div>
        </ul>
    </div>
</div>
@endsection