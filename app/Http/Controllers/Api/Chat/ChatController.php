<?php

namespace App\Http\Controllers\Api\Chat;

use App\Events\Chat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function message(Request $request)
    {

        Event(new Chat($request->input(key:'room'), $request->input(key:'username'), $request->input(key:'message')));
        return [];
    }
}
