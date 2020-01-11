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

Route::get('/',function(){
    return 'api work';
});

Route::resource('/user','api\UserController');
Route::resource('/bin','api\BinController');

Route::post('/',function(){
    return 'api post';
});
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
