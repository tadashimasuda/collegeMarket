<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public function scopegetMessage($query,$item_id){
        return $query->where('item_id',$item_id);
    }
}
