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

Route::get('/', function() {
    return redirect('/blog');
});

Route::get('/home', function () {
    return View('blog/Home');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');
//tambah
Route::get('/create','BlogController@create');
Route::post('/blog','BlogController@proses_create');

//Edit
Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::put('/blog/{id}','BlogController@proses_edit');

//Delete
Route::delete('/blog/{id}', 'BlogController@delete');