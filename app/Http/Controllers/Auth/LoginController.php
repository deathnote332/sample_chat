<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function submitlogin(){

        $user = Input::get('username');
        $password = Input::get('password');

        if(Auth::attempt(['email'=>$user,'password'=>$password])){
            $id  = Auth::user()->id;

            DB::table('users')->where('id',$id)->update(['status'=>1]);

            return Redirect::to('/chat');
        }else{
            return Redirect::to('/');
        }
    }

    public function logout(){
        $id = Auth::user()->id;
        DB::table('users')->where('id',$id)->update(['status'=>0]);
        Auth::logout();
        return Redirect::to('/');
    }
}
