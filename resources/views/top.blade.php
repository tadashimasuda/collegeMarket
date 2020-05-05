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
                            <img src="image/{{ $item->item_img }}" alt="">
                        </div>
                        <div class="item_info">
                            <div class="item_title_box">
                                <a href="#" class="item_title">{{ $item->title }}</a>
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
        <!--@yield('main') -->
    @endsection

    @section('footer')

    @endsection




