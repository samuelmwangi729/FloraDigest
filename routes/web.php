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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logistics','LogisticsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
route::get('/academia','AcademiaController@index');
Route::get('/news','NewsController@index');
Route::get('/politics','PoliticsController@index');
Route::get('/blog',[
    'uses' => 'PostController@index',
    'as' => 'post.create'
]);

Route::group(['prefix' => 'blog','middleware' => 'auth'], function () {
    Route::resource('posts', 'PostController');
    Route::get('/trashed',[
        'uses'=>'PostController@trashed',
        'as'=>'posts.trashed'
    ]);
    Route::get('/viewAll',[
        'uses'=>'PostController@view',
        'as'=>'posts.view'
    ]);
    Route::get('/restore',[
        'uses'=>'PostController@restore',
        'as'=>'posts.restore'
    ]);
    Route::post('/update/{id}',[
        'uses'=>'PostController@update',
        'as'=>'posts.update'
    ]);
    Route::get('/posts/restore/{id}',[
        'uses'=>'PostController@restore',
        'as'=>'posts.restore'
    ]);
    Route::get('/posts/edit/{id}',[
        'uses'=>'PostController@edit',
        'as'=>'posts.edit'
    ]);
});
Route::group(['middleware' => ['auth','admin']], function () {
    Route::resource('categories', 'CategoryController');
});

Route::resource('tags', 'TagsController');