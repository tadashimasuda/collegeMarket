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
                @empty($item)
                    <p class="non-item">アイテムがありません</p>
                @endempty
                <li class="item">
                    <div class="item_img">
                        <img src="/image/{{ $item->item_img}}" alt="">
                    </div>
                    <div class="item_info">
                        <div class="item_title_box">
                            <a href="/item/{{ $item -> id }}" class="item_title">{{ $item->title }}</a>
                        </div>
                        <div class="item_like">

                        </div>
                    </div>
                </li>
            @endforeach
            <div class="clear_fix"></div>
        </ul>
    </div>
</div>

@endsection