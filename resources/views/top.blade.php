@extends('layouts.contents')
@section('head')
@section('title','callegeMarket')
@endsection

@section('header')

@endsection

@section('main')
<!-- 変更ここから -->
<div id="top_img">
    <img src="image/img.png" alt="">
</div>
<div class="wrapper">
    <div class="items">
        <h2>新着アイテム</h2>
        <ul class="main_items">

            @foreach($items as $item)
            <li class="item">
                <div class="item_img">
                    <img src="{{ asset('/storage/images/'.$item->item_img)}}" alt="">
                </div>
                <div class="item_info">
                    <div class="item_title_box">
                        <a href="/item/show/{{ $item -> id }}" class="item_title">{{ $item->title }}</a>
                    </div>
                    <div class="item_like">
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
                    <div class="clear_fix"></div>
                </div>
            </li>
            @endforeach

            <div class="clear_fix"></div>
        </ul>
    </div>
</div>
<!--@yield('main') -->
@endsection

@section('footer')

@endsection