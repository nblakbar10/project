<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('user/detail', 'Api\UserController@details');
    Route::post('logout', 'Api\UserController@logout');
}); 


//Route::get('users', 'apicontroller@get_all_users');
//Route::post('users/add_users', 'apicontroller@insert_data_users');
//Route::put('/users/update/{id}','apicontroller@update_data_users');