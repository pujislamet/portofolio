<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('laravel');
});
Route::get('/create', function () {
    return view('home');
});
Route::post('/addProses', 'CRUDcontroller@addData');
Route::get('/readData', 'CRUDcontroller@readData');
Route::get('/hapus/{id}', 'CRUDcontroller@hapusData');
Route::get('/edit', 'CRUDcontroller@editData');
Route::post('/editPost', 'CRUDcontroller@editPost');

Route::resource('article', 'ArticleController');