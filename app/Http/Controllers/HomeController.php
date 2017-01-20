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

        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('user-active',$data)->render();

    }


    public function getFriendList(Request $request){
        $request->
        $user_list_data = DB::table('user_friend')
            ->where('user_id',Auth::user()->id)->get();
        $data =['user_list_data'=>$user_list_data];
        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('user-list',$data)->render();

    }

    public function  searchUser(){
        $user_list = User::all();
        $data = ["users"=>$user_list];
        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('search-list',$data)->render();
    }


}
