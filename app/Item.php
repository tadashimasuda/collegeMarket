<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //keyword like search
    public function scopeNameLike($query,$str){
       return $query->where('title','like',"%{$str}%");
    }
    //detail item 
    public function scopeitemDetail($query,$str){
        return $query->where('id',$str);
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
   
}
