<?php

use Illuminate\Http\Request;

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


Route::group(['prefix'=> 'TennisProject', 'as' => 'tennis','prefix' => 'version1'], 
	function(){
		Route::get('/', ['as' => 'index', 'uses' => 'AccountController@index']);
		Route::get('get-shopping-items', ['as' => 'index', 'uses' => 'Tennis\ShoppingitemController@index']);
	});
