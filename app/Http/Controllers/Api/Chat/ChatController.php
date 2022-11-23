<?php

namespace App\Http\Controllers\Api\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    // Menampilkan Semua Data
    public function index(Request $request)
    {
        $chats = Chat::all();
        return response()->json([
            "data" => $chats,
            "status" => 200,
        ]);
    }

    // Membuat Data Baru
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

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Chats",
        ]);
    }

    // Menghapus Data
    public function destroy($id)
    {
        $chats = Chat::findOrFail($id);
        $chats->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted Chats",
        ]);
    }
}
