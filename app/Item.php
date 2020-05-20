<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Item extends Model
{
    //keyword like search
    public function scopeNameLike($query, $str)
    {
        return $query->where('title', 'like', "%{$str}%");
    }

    //detail item 
    public function scopeitemDetail($query, $str)
    {
        return $query->where('id', $str);
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    public function comment(){
        return $this->hasMany('App\Comment');
    }
    public function userLike(){
        return $this->hasOne('App\Userlike','item_id','id');
    }
    public function purchase(){
        return $this->hasOne('App\Purchase','item_id','id');
    }
    public static function getPurchase($item_id){
        return $this->where('item_id',$item_id);
    }

    public function scopeuserItem($query, $id)
    {
        return $this->where('user_id', $id);
    }
    public static function createItem($request, $id)
    {
        $request = app('request');
        if ($request->hasfile('itemsImage')) {
            $item_img = $request->file('itemsImage');
            $filename = 'item_img_' . date('Y-m-d H:m:s') . $id . '.jpg';
            Image::make($item_img)->save(public_path($filename));
        }
        //insert item
        $item = new Item();
        $item->user_id = $id;
        $item->title = $request->itemsTitle;
        $item->item_description = $request->itemsDescription;
        $item->item_img = $filename;
        $item->price = $request->itemsPrice;
        $item->category = $request->itemsCategory;
        $item->status = $request->itemsStatus;
        $item->save();
    }
    
    public static function itemUpdate($request, $id,$userId){
        $request = app('request');
        if($request->hasfile('itemsImage')){
            $item_img = $request->file('itemsImage');
            $filename = 'item_img_'.date('Y-m-d H:m:s') . $id.'.jpg';
            Image::make($item_img)->save( public_path($filename) );
        }

        //update item
        $item = Item::find($id);
        $item ->user_id = $userId;
        $item ->title =$request->itemsTitle;
        $item ->item_description = $request->itemsDescription;
        $item ->item_img = $filename;
        $item ->price = $request ->itemsPrice;
        $item ->category = $request ->itemsCategory;
        $item ->status = $request ->itemsStatus;
        $item->save();
    }

    public static function itemSoldout($buyer,$itemId){
        $item = Item::find($itemId);
        $item->soldout = 1;
        $item->buyer =$buyer;
        $item->save();
    }
}
