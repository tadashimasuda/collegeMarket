<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function scopeNameEqual($query,$str){
        
        //return $query->where('title',$str);
        return $query->where('title','like',"%{$str}%");
    }
}
