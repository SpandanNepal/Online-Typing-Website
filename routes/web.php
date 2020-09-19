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

Route::get('/', function () {
    return view('indexfile');
});
//Route::get('/easy',function(){
//    return view('challanges/easy');
//  });

Route::get('/easy','pagesController@easy');

Route::get('/medium','pagesController@medium');

Route::get('/hard','pagesController@hard');

Route::get('/alladin-and-the-magic-lamp','pagesController@alladinandthemagiclamp');

Route::get('/the-tempest','pagesController@thetempest');

Route::get('/python','pagesController@python');

Route::get('/java','pagesController@java');

Route::get('/c','pagesController@c');

Route::get('/c++','pagesController@cplusplus');

//Route::get('/execute.php?wpm_value=','pagescontoller@get_url_val');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
