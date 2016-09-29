<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {return view('home');})->name('home');
Route::get('/contato', function () {return view('contato');})->name('contato');
Route::get('/CCMN', function () {return view('CCMN');})->name('CCMN');
Route::get('/BCMT', function () {return view('BCMT');})->name('BCMT');
Route::get('/Perfil', function () {return view('Perfil');})->name('Perfil');
Route::get('/cursoAdmin', function () {return view('cursoAdmin');})->name('CurAdmin');