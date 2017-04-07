<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| routes used in this section is not protected

|
*/
use Illuminate\Http\Request;
 
 Route::get('/',function(){
 	return view('welcome');
 });
Route::get('/getMenu','menuController@show');
Route::post('/saveMenu','menuController@store');
Route::get('/delete/{id}','menuController@destroy');
Auth::routes();
Route::get('/home', 'HomeController@index');





