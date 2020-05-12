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

        <a href="/item/register" id="user_create_item">出品する</a>
        <ul id="user_main_items">
            @foreach($items as $item)
            <li id="user_main_item">
                <div id="user_item_img">
                    <img src="/image/{{ $item->item_img }}" alt="">
                </div>
                <div id="_useritem_info">
                    <div id="user_item_title_box">
                        <a href="/item/show/{{ $item -> id }}" id="user_item_title">{{ $item->title }}</a>
                    </div>
                    <div id="user_item_like">

                    </div>
                </div>
            </li>
            @endforeach
            <div class="clear_fix"></div>
        </ul>
    </div>
</div>
@endsection