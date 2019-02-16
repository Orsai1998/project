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

Route::get('/show','ProductController@show');
Route::post('/addItem','ProductController@insert');
Route::post('/edit/{id}','ProductController@edit');
Route::get('/delete/{id}','ProductController@delete');
Route::get('/a',function (){
   return view('a');
});
Route::get('/b',function (){
    return view('b');
});
Route::get('/c',function (){
    return view('c');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/send','ProductController@send');