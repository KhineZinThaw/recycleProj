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
    return view('welcome');
});

Route::get('admin-panel', function(){
    
    return view('admin.dashboard');
});
Route::get('admin-login', function(){
    return view('admin.login');
});
Route::get('admin-register', function(){
    return view('admin.register');
});

Route::get('admin-datatables', 'UserController@index');

Route::get('admin-tables', 'BinController@index');

Route::get('admin-charts', function(){
    
    return view('admin.charts');
});

Route::get('admin-googlemaps', function(){
    
    return view('admin.google-maps');
});
Route::get('admin-typography', function(){
    
    return view('admin.typography');
});
Route::get('admin-colors', function(){
    
    return view('admin.colors');
});
Route::get('admin-widgets', function(){
    
    return view('admin.widgets');
});
Route::get('admin-404', function(){
    
    return view('admin.404');
});
Route::get('admin-500', function(){
    
    return view('admin.500`');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/workerRegister', 'WorkerRegisterController@index');

