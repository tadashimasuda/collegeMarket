<?php

namespace App\Http\Controllers;

use Validator;
use App\Item;
use App\User;
use  App\Comment;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class ItemsController extends Controller
{

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

    //serch like word from form_input 
    public function search(Request $request){
        $items = Item::Namelike($request->search_text)->get();
        return view('search_items',['items' => $items,'input' => $request->search_text]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
