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
    return view('acceuil');
})->name('acceuil');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact' , 'ContactController@index')->name('contact');
Route::post('/contact' , 'ContactController@store')->name('contact');
Route::get('/forum' , 'ForumController@index')->name('forum');
Route::get('/galerie' , 'PhotoController@store')->name('galerie');