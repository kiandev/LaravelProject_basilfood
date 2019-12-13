<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $message = Message::orderby('created_at','DESC')->get();
        return $message;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $message = new Message([
            'title' => $request->get('title'),
            'text_user' => $request->get('text_user'),
            'date_user' => $request->get('date_user'),
            'code' => $request->get('code'),
            'token' => $request->get('token'),
            'text_admin' => $request->get('text_admin'),
            'date_admin' => $request->get('date_admin'),
        ]);
        $message->save();
        return "1";
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
