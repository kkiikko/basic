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
Route::get('/','PostController@index');
Route::get('/posts/create' , 'PostController@create');
Route::get('/posts/{post}','PostController@show');
// 保存ボタンが押されてからDBにデータが登録されるまで
Route::post('/posts' , 'PostController@store');
// ブログ投稿編集画面表示
Route::get('/posts/{post}/edit', 'PostController@edit');
// ブログ投稿編集実行
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/', 'PostController@delete');


