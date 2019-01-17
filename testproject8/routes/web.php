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

Route::get('/home', 'HomeController@home');
Route::get('/store', 'HomeController@store');
Route::get('/prodregistry', 'ProductController@product');
Route::get('/addproduct', 'ProductController@addproduct');
Route::post('/saveproduct', 'ProductController@saveproduct');
Route::post('/delproduct', 'ProductController@delproduct');
Route::post('/updateform', 'ProductController@updateform');
Route::post('/updateprod','ProductController@updateprod');