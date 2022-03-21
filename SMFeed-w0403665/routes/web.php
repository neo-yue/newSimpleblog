<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/managers','UserController');

Route::resource('/posts','PostController');



Route::group(['middleware'=>['RoleCheck']],function (){
    Route::resource('/managers','UserController');
});

Route::group(['middleware'=>['ThemeCheck']],function (){
    Route::resource('/themes','ThemeController');
});

//create a route to handle the theme dropdown
// Route::post('/theme/change', 'ThemeController@change');

Route::post('/theme/change', function(){

    Cookie::queue('TestCookie', request()->input('theme'), 3600);

    return redirect('/themes');

});
