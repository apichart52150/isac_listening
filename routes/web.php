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
Route::get('access/{token}/{id}', 'Auth\AccessController@store');

Route::middleware(['middleware' => 'auth:ipack'])->group(function () {
    Route::get('welcome', 'HomeController@index')->name('welcome');
});

Route::get('/login', function (){
    return view('welcome');
})->name('login');