<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    //get comment & send comment
    public function index(){
        
    }
    
    // insert comment table 
    public function create(Request $request,Comment $comment){
        $itemSenderId = Auth::id();
        $comment->addComment($itemSenderId,$request->itemId,$request->itemComment);
        redirect('/item/'+$request->itemId);
    }
}
