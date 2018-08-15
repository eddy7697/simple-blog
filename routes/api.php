<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/post/get/{uuid}', 'Backend\PostController@getPost');
Route::get('/post/{row}/get', 'Backend\PostController@getAllPost');
Route::post('/post/add', 'Backend\PostController@addPost');
Route::put('/post/update/{uuid}', 'Backend\PostController@updatePost');
Route::delete('/post/delete', 'Backend\PostController@deletePost');