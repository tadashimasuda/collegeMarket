<?php

namespace App\Http\Controllers;

use App\Item;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return message.index page & data
        $messages = Message::getMessage($request->item_id)->get();
        //item_idはmessageが一件もない時に値がなくなる
        return view('message',['messages' => $messages,'item_id' => $request->item_id]);
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
        $sender_id = Auth::id();
        //$recieve_id = Message::getrecieve($sender_id)->first();
        Item::
        
        //insert message
        $message = new Message();
        $message->item_id = $request->item_id;
        //messages　if(Auth::id() != $message->recieverid)
        // $message ->recieve_id = 
        $message->sender_id =  $sender_id;
        $message ->content = $request->messagesContent;
        $message->save();
        redirect('/top');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
