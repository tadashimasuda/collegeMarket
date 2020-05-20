@extends('layouts.contents')
@section('head')
@section('title','検索結果')
@endsection

@section('header')

@endsection

@section('main')
<div class="wrapper">
    <h2 id="search_title">検索結果</h2>
    <form action="#" method="get" id="select_form">
        <select name="" id="order">

        </select>
    </form>
    <div id="search_items">
        <ul class="main_items">
            @foreach( $items as $item )
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
                </div>
            </li>
            @endforeach
            <div class="clear_fix"></div>
        </ul>
    </div>
</div>

@endsection