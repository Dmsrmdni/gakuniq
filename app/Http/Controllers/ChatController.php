<?php

namespace App\Http\Controllers;

use App\Models\chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chats = Chat::all();
        return view('admin.chat.index', compact('chats'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.chat.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'user_id' => 'required',
            'room' => 'required',
            'message' => 'required',
        ]);

        $chats = new Chat();
        $chats->user_id = $request->user_id;
        $chats->room = $request->room;
        $chats->message = $request->message;
        $chats->save();

        return redirect()
            ->route('chat.index')->with('toast_success', 'Data has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(chat $chat)
    {
        //
    }
}
