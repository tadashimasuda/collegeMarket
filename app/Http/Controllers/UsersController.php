<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //get userinfo & send user info
    public function index(Request $request){
        $user = User::userInfo($request->id)->first();
        return view('user',['user'=>$user]);
    }
}
