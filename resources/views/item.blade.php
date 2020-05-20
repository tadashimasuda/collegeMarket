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
        <img src="{{ asset('/storage/images/'.$item->item_img)}}" alt="">
        </div>
        <p id="item_detail_price">価格：{{$item->price}}円</p>
        <div id="item_detail_business_box">
            <!-- DMpageへのボタン設置　条件：soldout buyer 出品者 -->
            @if (( $item->soldout ==1 ) && ((Auth::id() == $item->user->id) || (Auth::id() == $item->buyer)))
                <!-- <a href="/messages" id="item_message">取引ページへ</a> -->
                <form action="/messages" method="get">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <input type="submit" id="trade_btn" value="取引ページへ">
                 </form>
            @elseif($item->soldout == 1)
                <p>売り切れです</p>
            @elseif($item->soldout == null && Auth::id() == $item->user->id)
                <form action="{{ route('items.edit',$item->id)}}" method="get">
                    @csrf
                    <div id="user_item_edit">
                        <input type="hidden"  name="id" value="{{ $item->id }}">
                        <input type="submit" name='itemEdit' value="編集する">
                    </div>
                </form>

                <form action="#" method="delete">
                    @csrf
                    <div id="user_item_delete">
                        <input type="submit" name="itemDelete" value="削除する">
                    </div>
                </form>
            @else
                <form action="/item/buy" method="post">
                @csrf
                @method('PUT')
                    <input type="hidden"  name='itemId' value="{{ $item->id }}">
                    <input type="submit" id="item_detail_business" value="購入する">
                </form>
                <!-- <a href="#" id="item_detail_business">購入する</a> -->
                <p>※価格交渉はコメント欄をご使用ください</p>
            @endif
        </div>
        <div id="item_description_box">
            <p id='item_description_title'>商品詳細</p>
            <p id='item_description'>{{ $item -> item_description }}</p>
        </div>

        <div id="item_user_box">
            <!-- <h3 id="item_user_title">出品者情報</h3> -->
            <ul id="item_user">
                <li id="item_user_img">
                    <img src="/image/{{ $item->user->user_img }}" alt="">
                </li>
                <li id="item_user_name">
                    <a href="/user/{{ $item->user->id}}">{{ $item->user->name }}</a>
                </li>
            </ul>
            <p id="item_user_name_icon">></p>
        </div>
        <div id="item_detail_comment_box">
            <h3 id="item_detail_comment">コメント</h3>
            <div id="item_comment">
                <!-- foreachでコメント回す -->
                <ul id="comments">
                
                    @foreach($item->comment as $comment)
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