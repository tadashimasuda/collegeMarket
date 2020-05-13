<?php

namespace App\Http\Controllers;

use Validator;
use App\Item;
use App\User;
use  App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Laravel\Ui\Presets\React;

class ItemsController extends Controller
{


    public function register(){
        return view('item_register');
    }
    //serch like word from form_input 
    public function search(Request $request){
        $items = Item::Namelike($request->search_text)->get();
        return view('search_items',['items' => $items,'input' => $request->search_text]);
    }

    public function itemBuy(Request $request){
        $buyer=Auth::id();
        //serach -> update　soldout
        Item::itemSoldout($buyer,$request);
        return redirect('/top');
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //show toppage　or form input -> null
            $items = Item::all();
            return view('top', ['items' => $items]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //get user id
        $id = Auth::id();
        Item::createItem($request,$id);
        redirect('/top');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        if($request->id){
            $item = Item::itemDetail($request->id)->first();
            $user = User::find($item->user_id)->first();
            $comments = Comment::itemComments($request->id)->get();
            // $user = Item::where('id',$request->id)->with('user')->first();
            return view('item',['item' => $item,'user' =>$user,'comments' =>$comments]);
        }else{
            route('top');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ////show item edit page
        $item = Item::itemDetail($id)->first();
        return view('editItem',['item' =>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //update item
        //get user id
        $userId = Auth::id();
        Item::itemUpdate($request,$id,$userId);
        redirect('/top');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
