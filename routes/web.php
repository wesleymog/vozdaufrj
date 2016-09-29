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

Route::get('/', function () {
    return view('home');


});

Route::get('/contato', function () {
    return view('contato');

});

Route::get('/CCMN', function () {
    return view('CCMN');

});
Route::get('/BCMT', function () {
    return view('BCMT');

});
Route::get('/Perfil', function () {
    return view('Perfil');

});