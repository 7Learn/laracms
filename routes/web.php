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

//Route::get('help/{id?}','Admin\HelpController@index');
//Route::get('admin/users','Admin\HelpController@index');
//Route::get('admin/posts','Admin\HelpController@index');
//Route::get('admin/comments','Admin\HelpController@index');

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function (){
        Route::get('/','AdminController@index')->name('admin.dashboard.index');
        Route::get('/users','UsersController@index')->name('admin.users.index');
        Route::get('/users/create','UsersController@create')->name('admin.users.create');
        Route::post('/users/create','UsersController@store')->name('admin.users.create');
        Route::get('/users/delete/{user_id}','UsersController@remove')->name('admin.users.remove');
        Route::get('/users/edit/{user_id}','UsersController@edit')->name('admin.users.edit');
        Route::post('/users/edit/{user_id}','UsersController@update')->name('admin.users.update');
});
