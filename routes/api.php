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
Route::get('get-home', 'ApiController@getHome');
Route::get('detail/{id_prd}/product', 'ApiController@getDetail');
Route::post('send-mail', 'ApiController@sendMail');
Route::get('paginate', 'ApiController@getPaginate');

