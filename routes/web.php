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
Route::get('/', function() {
    if(Auth::guard('ipack')->check()) {
        return redirect('welcome');
    }else {
        return redirect('notfound');
    }
});

Route::middleware(['auth:ipack'])->group(function () {
    Route::get('welcome', 'HomeController@*****')->name('welcome');
});

Route::get('home', 'HomeController@index')->name('home');



Route::get('notfound', 'HomeController@not')->name('notfound');