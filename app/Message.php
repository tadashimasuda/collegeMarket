<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public function scopegetMessage($query,$item_id){
        return $query->where('item_id',$item_id);
    }
    // public function users(){
    //     return $this->belongsTo('App\User','','id')
    // }
    public function items(){
        return $this->belongsTo('App\Item','item_id','id');
    }
    public function purchase(){
        return $this->belongsTo('App\Purchase','item_id','id');
    }

    public function user(){
        return $this->hasOne('App\User','id','sender_id');
    }

    // public function scopegetrecieve($send_id){
    //     if($send_id == $this->sender_id){
               
    //     }
    // }
}
