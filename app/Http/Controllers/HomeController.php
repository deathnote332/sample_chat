<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
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

}
