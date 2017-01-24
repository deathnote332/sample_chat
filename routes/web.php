<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::match(array('GET','POST'),'submitlogin',   'Auth\LoginController@submitlogin');
Route::match(array('GET','POST'),'logout',   'Auth\LoginController@logout');


Route::match(array('GET','POST'),'/',   'HomeController@home');

Route::group(['middleware'=>['afterAuth']],function(){
    Route::match(array('GET','POST'),'/',   'HomeController@home');
});

Route::group(['middleware'=>['auth']],function(){

    Route::match(array('GET','POST'),'chat',   'HomeController@chat');
    Route::match(array('GET','POST'),'homepage',   'HomeController@home');
    Route::match(array('GET','POST'),'insertUser',   'HomeController@insertUser');
    Route::match(array('GET','POST'),'activeUser',   'HomeController@activeUser');
    Route::match(array('GET','POST'),'getChat',   'HomeController@getChat');
    Route::match(array('POST'),'getFriendList',   'HomeController@getFriendList');
    Route::match(array('GET','POST'),'searchUser',   'HomeController@searchUser');
    Route::match(array('GET','POST'),'sendFriendRequest',   'HomeController@sendFriendRequest');


});




