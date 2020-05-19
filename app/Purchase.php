<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    public static function addData($buyer,$itemId,$seller,$price){
        $purchase = new Purchase;
        $purchase->seller_id = $seller;
        $purchase->buyer_id = $buyer;
        $purchase->item_id = $itemId;
        $purchase->price = $price;
        $purchase->save();
    }
}
