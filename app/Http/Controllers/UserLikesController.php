<?php

namespace App\Http\Controllers;
use App\Userlike;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userLikesController extends Controller
{
    //
    //item like
    public function create(Request $request){
       //user_liketable  register item_id&user_id
       $userId = Auth::id();
       $userLike = new Userlike;
       $userLike->item_id = $request->id;
       $userLike->user_id = $userId;
       $userLike->save();
       return back();
    }
    public function delete(Request $request){
        $userId = Auth::id();
        Userlike::where('user_id',$userId)->where('item_id',$request->id)->delete();
        return back();
    }
}
