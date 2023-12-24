<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'App\Http\Controllers\myController@login');
Route::post('/login', 'App\Http\Controllers\myController@login');

Route::get('/logout', 'App\Http\Controllers\myController@logout');

Route::get('/register', 'App\Http\Controllers\myController@register');
Route::post('/register', 'App\Http\Controllers\myController@register');

Route::get('/', 'App\Http\Controllers\myController@index');

Route::get('/post', 'App\Http\Controllers\myController@post');
Route::post('/post', 'App\Http\Controllers\myController@post');

