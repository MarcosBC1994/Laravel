<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'F1BlogController@index');
Route::get('/index', 'F1BlogController@index');
Route::get('/gallery', 'F1BlogController@gallery');
Route::get('/blog', 'F1BlogController@blog');
Route::get('/contactus', 'F1BlogController@contact');
