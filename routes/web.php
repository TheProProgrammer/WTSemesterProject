<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'App\Http\Controllers\myController@login');
Route::post('/login', 'App\Http\Controllers\myController@login');

Route::get('/logout', 'App\Http\Controllers\myController@logout');

Route::get('/register', 'App\Http\Controllers\myController@register');
Route::post('/register', 'App\Http\Controllers\myController@register');

Route::get('/search/{term}','App\Http\Controllers\myController@showSearched');
Route::get('/', 'App\Http\Controllers\myController@index');


Route::get('/post', 'App\Http\Controllers\myController@post');
Route::post('/post', 'App\Http\Controllers\myController@post');

Route::get('/product/{id}', 'App\Http\Controllers\myController@product');

Route::get('/delete/{id}', 'App\Http\Controllers\myController@delete');

Route::get('/account', 'App\Http\Controllers\myController@account');

