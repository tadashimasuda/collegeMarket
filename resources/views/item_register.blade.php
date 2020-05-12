@extends('layouts.contents')
@section('head')
@section('title','検索結果')
@endsection

@section('header')

@endsection

@section('main')
<div class="wrapper">
    <div id="item_register">
        <form action="/item/register" enctype="multipart/form-data" method="post">
            @csrf
            <label for="itemsTitle">商品名</label>
            <input type="text" id="itemsTitle" name="itemsTitle">

            <label for="itemsDescription">商品説明</label>
            <input type="textarea" id="itemsDescription" name="itemsDescription">

            <label for="itemsImage">商品画像</label>
            <input type="file" id="itemsImage" name="itemsImage">

            <label for="itemsPrice">商品名</label>
            <input type="text" id="itemsPrice" name="itemsPrice">円

            <label for="itemsCategory">商品カテゴリ</label>
            <select name="itemsCategory" id="itemscategory">
                <option value="1">教科書</option>
                <option value="2">その他</option>
            </select>

            <label for="itemsStatus">商品状態</label>
            <select name="itemsStatus" id="itemsStatus">
                <option value="1">新品・未使用</option>
                <option value="2">未使用に近い</option>
                <option value="3">目立つ傷汚れなし</option>
                <option value="4">傷汚れあり</option>
            </select>

            <input type="submit" value="出品する">
        </form>
    </div>
</div>
@endsection