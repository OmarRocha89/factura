<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]); /*Activando la verificación de correo*/

Route::get('/', function () {
    return view('welcome');
});

/*Auth::routes();*/



Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/admin', 'Admin\IndexController@index')->name('admin');

});

// user protected routes
Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});


