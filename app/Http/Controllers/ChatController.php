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
            ->where('user_id',Auth::user()->id)
            ->get();
        $data = ['chatList'=>$chatList];
        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('chat-list',$data)->render();

    }

    public function  getFriendMessage(){

        $id = Input::get('user_id');
        $getMessage = DB::table('chat_room_data')
            ->where('chat_room',$id)
            ->get();

        $data = ['getMessage'=>$getMessage,'chat_room_id'=>$id];
        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('friend-message',$data)->render();
    }

    public function saveMessage(){
        $chat_room_id = Input::get('chat_room_id');
        $message = Input::get('message');
        $_from = Input::get('_from');

        DB::table('chat_room_data')
            ->insert(['chat_room'=>$chat_room_id,'message'=>$message,'_from'=>$_from]);
    }

    public static function humanTiming ($time)
    {

        $time = time() - $time; // to get the time since that moment
        $time = ($time<1)? 1 : $time;
        $tokens = array (
            31536000 => 'year',
            2592000 => 'month',
            604800 => 'week',
            86400 => 'day',
            3600 => 'hour',
            60 => 'minute',
            1 => 'second'
        );

        foreach ($tokens as $unit => $text) {
            if ($time < $unit) continue;
            $numberOfUnits = floor($time / $unit);
            return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
        }

    }
}