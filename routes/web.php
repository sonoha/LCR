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
Route::get('/','TlController@tl');
Route::get('/home', function () {
    return redirect('/');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/detail/{post_id}','DetailController@show');
Route::post('/post/tl','PostController@InsertPostsDB');
Route::post('/post/detail/{post_id}','PostController@InsertCommentsDB');

//不正なURLへのリクエストはトップへリダイレクト
Route::fallback(function () {
    return redirect('/');
});