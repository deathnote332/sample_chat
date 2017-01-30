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
            ->orWhere('others_id',Auth::user()->id)
            ->get();
        $data = ['chatList'=>$chatList];
        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('chat-list',$data)->render();

    }

    public function  getFriendMessage(){

        $id = Input::get('user_id');

        $getMessage = DB::table('chat_room_data')
            ->where('chat_room_id',$id)
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
            ->insert(['chat_room_id'=>$chat_room_id,'message'=>$message,'_from'=>$_from]);
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
            3600 => 'hr',
            60 => 'min',
            1 => 'sec'
        );

        foreach ($tokens as $unit => $text) {
            if ($time < $unit) continue;
            $numberOfUnits = floor($time / $unit);
            return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'').' ago';
        }

    }




    public function getFriendsUser(){
        $users = DB::table('chat_rooms')
                    ->get();
        $data = array();
        foreach($users as $key=>$val){
            if($val->chat_type==1){
                $chat_users = explode(',',$val->user_chat_id);
                if(in_array("".Auth::user()->id,$chat_users)){
                    array_push($data,['users'=>$chat_users,'chat_room_id'=>$val->id,'chat_type'=>$val->chat_type]);
                }
            }else{
                $chat_users = explode(',',$val->user_chat_id);
                if(in_array("".Auth::user()->id,$chat_users)){
                    array_push($data,['users'=>$chat_users,'chat_room_id'=>$val->id,'chat_type'=>$val->chat_type]);
                }
            }
        }

        $data1 = ['chatList'=>$data];

        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('chat-list',$data1)->render();

        DB::table('chat_rooms')->insert(['user_chat_id'=>[1,2,3],'chat_type'=>1]);
    }

    //create a function that will sum number from 1 to N
    public function getSum(){
        $num = 1;
        $total = 0;


    for($i=0;$i<=$num;$i++){
        $total = $total+$i;
    }
//

        return $total;


//        return (1+$num)*$num/2;

    }
    //without loop
}