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

Auth::routes();

Route::get('/', function () {
    return redirect('login');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('home', 'HomeController@index');
    Route::resource('users', 'UserController');
    Route::get('users/{user}/password', 'UserController@editPassword')->name('users.password.edit');
    Route::patch('users/{user}/password', 'UserController@updatePassword')->name('users.password.update');
    Route::resource('customers', 'CustomerController');
    Route::resource('products', 'ProductController');
    Route::resource('movements', 'ProductsMovementController');

    Route::get('reports.stock', 'UserController@editPassword');
});
