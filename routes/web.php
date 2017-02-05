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
use Illuminate\Http\Request;
 
 Route::get('/',function(){
 	return view('welcome');
 });
Route::get('/getMenu','menuController@show');
Route::post('/saveMenu','menuController@store');
Route::get('/delete/{id}','menuController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/redirect', function () {
    $query = http_build_query([
        'client_id' => 7,
        'redirect_uri' => 'http://www.hamrokitchen.com/apiclient',
        'response_type' => 'code',
        'scope' => '',
    ]);

    return redirect('http://www.hamrokitchen.com/oauth/authorize?'.$query);
});
Route::get('/getuser',function(Request $request){
	 return ($request->user());
});

Route::get('/apiclient', function (Request $request) {
    $http = new GuzzleHttp\Client;

    $response = $http->post('http://hamrokitchen.com/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => '7',
            'client_secret' => 'FauxQ7TuJptXPwDw0I9OBr6ScESzzTfWDCf4Ynpq',
            'redirect_uri' => 'http://www.hamrokitchen.com/apiclient',
            'code' => $request->code,
        ],
    ]);

    return json_decode((string) $response->getBody(), true);
});



