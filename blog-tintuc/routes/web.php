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
Route::get('/','PagesController@index');
Route::get('/articles',[
    'as'=>'article.index',
    'uses'=>'ArticlesController@index']);
Route::get('/articles/xxx',
[
    'as' => 'article.xxx',
    'uses' => "ArticlesController@xxx"

]);
Route::get('/articles/create',[
    'as'=>'article.create',
    'uses'=>'ArticlesController@create'
]);

Route::post('/articles',
[
    'as'=>'article.store',
    'uses'=>'ArticlesController@store'
]);

Route::get('/articles/{id}',[
    'as'=>'article.show',
    'uses'=>'ArticlesController@show'
]);
Route::get('/articles/{id}/edit',[
    'as' => 'article.edit',
    'uses' => 'ArticlesController@edit'
]);
Route::put('/articles/{id}',[
    'as'=>'article.update',
    'uses'=>'ArticlesController@update'
]);

Route::get('/articles/test', function(){
    return view('article.edit');
});
