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

class HomeController extends Controller
{
//    public function home(){
//
//        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
//        return $theme->of('Home.home')->render();
//    }

    public function chat(){
        if(Auth::check()){
            $data = ['users' => User::all()];

            $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
            return $theme->of('chat',$data)->render();
        }else{
            return Redirect::to('/');
        }

    }

    public function insertUser(){
        User::insert(array(
            'email' =>'raf@g.com',
            'name' =>'Raf',
            'password' => Hash::make('password')
        ));
    }

    public function home(){

        if(Auth::check()){
            return Redirect::to('chat');
        }else{


            $theme = Theme::uses('default')->layout('default')->setTitle('Login');
            return $theme->of('login')->render();
        }
    }

    public function activeUser(){
        $data = ['users' => User::all()];
        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('user-active',$data)->render();

    }


    public function  getChat(){

        $chat_room_data = DB::table('chat_rooms')
            ->join('chat_room_data','chat_rooms.id','=','chat_room_data.chat_room')
            ->select('chat_room_data.*')
            ->where('user_id',Auth::user()->id)->get();
        $data = ['chat_room_data'=>$chat_room_data];

        $theme = Theme::uses('default')->layout('home')->setTitle('Homepage');
        return $theme->of('user-active',$data)->render();
    }


    public function getFriendList(){

        $friend_list_data = DB::table('user_friend')
            ->where('user_id',Auth::user()->id)->get();
        $data =['friend_list_data'=>$friend_list_data];

        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('friend-list',$data)->render();

    }

    public function  searchUser(){
        $user_list = User::all();
        $friend_list = DB::table('user_friend')->get();

        $approve_friend= array();
        $id='';
        foreach($user_list as $key=>$val){

            foreach ($friend_list as $key=>$fl){
                $friends= json_decode($fl->friend_id);
                foreach($friends as $key=>$f){
                    if($val->id==$f->id){
                        if($f->status=="Approve"){

                            $id = $f->id;
                        }
                    }
                }
            }
       //     array_push($approve_friend,["friends"=>array('id'=>$val->id,'name'=>$val->name,'status'=>)]);
        }

        $data = ["users"=>$user_list];
        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('search-list',$data)->render();
    }

    public function sendFriendRequest(Request $request){
        $getFriendList = DB::table('user_friend')
            ->where('user_id',Auth::user()->id)
            ->first();

        $data = json_decode($getFriendList->friend_id);
        $friend_data = array(
          'name'=>'Raf',
           'status'=>'2'
        );
        $friend_data1 = array(
            'id'=>1,
            'name'=>'Raf',
            'status'=>'2'
        );
        array_push($friend_data,$friend_data1);
        dd(json_encode($friend_data1));

        array_push($data, ['3'=>$friend_data]);

        $updateFriendList = DB::table('user_friend')
            ->where('user_id',Auth::user()->id)
            ->update(['friend_id'=>json_encode($data)]);

        dd('Success');

    }



}
