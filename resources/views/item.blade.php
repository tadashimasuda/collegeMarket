@extends('layouts.contents')
@section('head')
@section('title','商品詳細')
@endsection

@section('header')

@endsection

@section('main')
<div class="wrapper">
    <div id="item_detail">
    @foreach($item as $item_info)
        <h2 id="item_detail_title">{{ $item_info->title }}</h2>
        <div id="item_detail_img">
            <img src="/image/{{ $item_info->item_img }}" alt="">
        </div>
        <p id="item_detail_price">価格：{{$item_info->price}}円</p>
        <div id="item_detail_business_box">
            <a href="#" id="item_detail_business">取引する</a>          
        </div>
        <div id="item_description_box">
            <p id='item_description_title'>商品詳細</p>
            <p id='item_description'>{{ $item_info -> item_description }}</p>
        </div>
        <div id="item_detail_comment_box">
          <h3 id="item_detail_comment">コメント</h3>
            
        </div>
        
    @endforeach
    </div>
</div>

@endsection