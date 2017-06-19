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

Route::get('/', 'HomeController@index');

Route::get('post/{post_id}','HomeController@show')->name('home.show');
Route::get('category/{cat_id}','HomeController@displayCats')->name('home.cat');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['admin']], function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard.index');
    Route::get('/users', 'UsersController@index')->name('admin.users.index');
    Route::get('/users/create', 'UsersController@create')->name('admin.users.create');
    Route::post('/users/create', 'UsersController@store')->name('admin.users.create');
    Route::get('/users/delete/{user_id}', 'UsersController@remove')->name('admin.users.remove');
    Route::get('/users/edit/{user_id}', 'UsersController@edit')->name('admin.users.edit');
    Route::post('/users/edit/{user_id}', 'UsersController@update')->name('admin.users.update');

    //posts

    Route::get('/posts', 'PostsController@index')->name('admin.posts.index');
    Route::get('/posts/create', 'PostsController@create')->name('admin.posts.create');
    Route::post('/posts/create', 'PostsController@store')->name('admin.posts.create');
    Route::get('/posts/delete/{post_id}', 'PostsController@remove')->name('admin.posts.remove');
    Route::get('/posts/edit/{post_id}', 'PostsController@edit')->name('admin.posts.edit');
    Route::post('/posts/edit/{post_id}', 'PostsController@update')->name('admin.posts.update');

    //categories

        Route::get('/categories','CategoriesController@index')->name('admin.categories.index');
        Route::get('/categories/create','CategoriesController@create')->name('admin.categories.create');
        Route::post('/categories/create','CategoriesController@store')->name('admin.categories.create');
        Route::get('/categories/delete/{category_id}','CategoriesController@remove')->name('admin.categories.remove');
        Route::get('/categories/edit/{category_id}','CategoriesController@edit')->name('admin.categories.edit');
        Route::post('/categories/edit/{category_id}','CategoriesController@update')->name('admin.categories.update');

    //tags

        Route::get('/tags','TagsController@index')->name('admin.tags.index');
        Route::get('/tags/create','TagsController@create')->name('admin.tags.create');
        Route::post('/tags/create','TagsController@store')->name('admin.tags.create');
        Route::get('/tags/delete/{tag_id}','TagsController@remove')->name('admin.tags.remove');
        Route::get('/tags/edit/{tag_id}','TagsController@edit')->name('admin.tags.edit');
        Route::post('/tags/edit/{tag_id}','TagsController@update')->name('admin.tags.update');

    //comments

        Route::get('/comments','CommentsController@index')->name('admin.comments.index');
        Route::get('/comments/create','CommentsController@create')->name('admin.comments.create');
        Route::post('/comments/create','CommentsController@store')->name('admin.comments.create');
        Route::get('/comments/delete/{comment_id}','CommentsController@remove')->name('admin.comments.remove');
        Route::get('/comments/edit/{comment_id}','CommentsController@edit')->name('admin.comments.edit');
        Route::post('/comments/edit/{comment_id}','CommentsController@update')->name('admin.comments.update');


});

Auth::routes();

