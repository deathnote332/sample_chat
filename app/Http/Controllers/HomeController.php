<?php

namespace App\Http\Controllers;
use Theme;

class HomeController extends Controller
{
    public function home(){
        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('Home.home')->render();
    }

    public function chat(){
        $theme = Theme::uses('default')->layout('default')->setTitle('Homepage');
        return $theme->of('chat')->render();
    }
}
