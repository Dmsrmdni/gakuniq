<?php

namespace App\Http\Controllers\Api\Chat;

use App\Events\Chat;
use App\Models\ChMessage as Message;
use App\Models\User;
use Chatify\Facades\ChatifyMessenger as Chatify;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class ChatController extends Controller
{
    // Menampilkan Semua Data
    public function index(Request $request)
    {
        $chats = Message::join('users', 'ch_messages.from_id', '=', 'users.id')->select("ch_messages.from_id", "ch_messages.to_id", "ch_messages.body", "users.nama_depan", 'ch_messages.created_at')->whereIn('ch_messages.from_id', [auth()->user()->id, 1])->whereIn('ch_messages.to_id', [auth()->user()->id, 1])->orderBy('ch_messages.created_at', 'asc')->get();
        return response()->json([
            'data' => $chats,
            'status' => 200,
        ]);

        // $users = Message::leftjoin('users', 'ch_messages.from_id', '=', 'users.id')->select("ch_messages.from_id", "ch_messages.to_id", "ch_messages.body", "users.nama_depan")->where('ch_messages.from_id', auth()->user()->id)->get();
        // $admin = Message::leftjoin('users', 'ch_messages.from_id', '=', 'users.id')->select("ch_messages.from_id", "ch_messages.to_id", "ch_messages.body", "users.nama_depan")->where('ch_messages.from_id', 1)->where('ch_messages.to_id', auth()->user()->id)->get();

        // return response()->json([
        //     'users' => $users,
        //     'admin' => $admin,
        //     'status' => 200,
        // ]);

    }

    // Membuat Data Baru
    public function store(Request $request)
    {
        $attachment = null;
        $attachment_title = null;

        // send to database
        $messageID = mt_rand(9, 999999999) + time();
        Chatify::newMessage([
            'id' => $messageID,
            'type' => 'user',
            'from_id' => Auth::user()->id,
            'to_id' => 1,
            'body' => htmlentities(trim($request['message']), ENT_QUOTES, 'UTF-8'),
            'attachment' => ($attachment) ? json_encode((object) [
                'new_name' => $attachment,
                'old_name' => htmlentities(trim($attachment_title), ENT_QUOTES, 'UTF-8'),
            ]) : null,
        ]);

        // fetch message to send it with the response
        $messageData = Chatify::fetchMessage($messageID);

        // send to user using pusher
        Chatify::push('private-chatify', 'messaging', [
            'from_id' => Auth::user()->id,
            'to_id' => 1,
            'message' => Chatify::messageCard($messageData, 'default'),
        ]);

        // send the response
        return Response::json([
            'status' => '200',
            'message' => $messageData ?? [],
            'tempID' => $request['temporaryMsgId'],
        ]);
    }

    public function store2(Request $request)
    {
        event(new Chat(121290, 'user', 1, auth()->user()->id, $request->input('body'), ''));

        $attachment = null;
        $attachment_title = null;

        // send to database
        $messageID = mt_rand(9, 999999999) + time();
        Chatify::newMessage([
            'id' => $messageID,
            'type' => 'user',
            'from_id' => Auth::user()->id,
            'to_id' => 1,
            'body' => htmlentities(trim($request['body']), ENT_QUOTES, 'UTF-8'),
            'attachment' => ($attachment) ? json_encode((object) [
                'new_name' => $attachment,
                'old_name' => htmlentities(trim($attachment_title), ENT_QUOTES, 'UTF-8'),
            ]) : null,
        ]);

        // fetch message to send it with the response
        $messageData = Chatify::fetchMessage($messageID);

        // send to user using pusher
        Chatify::push('private-chatify', 'messaging', [
            'from_id' => Auth::user()->id,
            'to_id' => 1,
            'message' => Chatify::messageCard($messageData, 'default'),
        ]);

        // send the response
        return Response::json([
            'status' => '200',
            'message' => $messageData ?? [],
            'tempID' => $request['temporaryMsgId'],
        ]);

    }

    // // Menghapus Data
    // public function destroy($id)
    // {
    //     $chats = Chat::findOrFail($id);
    //     $chats->delete();

    //     return response()->json([
    //         "status" => 201,
    //         "messaage" => "succesfully deleted Chats",
    //     ]);
    // }
}
