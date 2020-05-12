<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //insert comment
    public function addComment($senderId,$itemId,$itemComment){
        $comment = new Comment();
        $comment -> item_id = $itemId;
        $comment -> sender_id = $senderId;
        $comment -> content = $itemComment;
        $comment -> save();
        redirect('top');
    }

    public function scopeitemComments($query,$id){
        return $query->where('item_id',$id);
    }
}
