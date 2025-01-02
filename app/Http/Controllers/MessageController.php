<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Message;

class MessageController extends Controller
{
    public function index(): View
    {
        //メッセージテーブルのレコードを全権取得
        $messages = Message::all();
        //messagesというキーで、ビューへ渡す
        return view('message/index',['messages'=>$messages]);
    }
}
