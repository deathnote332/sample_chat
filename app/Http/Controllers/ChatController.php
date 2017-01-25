<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Theme;

class ChatController extends Controller
{
    public function ChatList(){
        $chatList = DB::table('chat_rooms')
            ->join('chat_room_data','chat_rooms.id','=','chat_room_data.chat_room')
            ->select('chat_room_data.*','chat_rooms.others_id')
            ->where('chat_rooms.user_id',Auth::user()->id)
            ->get();

        $data = ['chatList'=>$chatList];
        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('chat-list',$data)->render();

    }

}