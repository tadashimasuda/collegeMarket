<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //keyword like search
    public function scopeNameLike($query,$str){
       return $query->where('title','like',"%{$str}%");
    }
}
