<?php

use Illuminate\Http\Request;
use App\menu;
use App\todo;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/menu',function(Request $request){
	return menu::all();
});
Route::group([
	'middleware'=>'auth:api'],
	function(){
		Route::get('/menu',function(){
			return menu::all()->get('menu');
		});
		Route::post('/todo',function(Request $request){
			$todo=new todo;
			$todo->todo_name=$request->todo;
			$todo->save();
		});
	});