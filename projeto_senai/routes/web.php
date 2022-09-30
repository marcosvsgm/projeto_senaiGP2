<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/pergunta1', function () {
    return view('pergunta1');
});

Route::get('/pergunta2', function () {
    return view('pergunta2');
});

Route::get('/pergunta3', function () {
    return view('pergunta3');
});

Route::get('/pergunta4', function () {
    return view('pergunta4');
});

Route::get('/pergunta5', function () {
    return view('pergunta5');
});

Route::get('/pergunta6', function () {
    return view('pergunta6');
});

Route::get('/pergunta7', function () {
    return view('pergunta7');
});
Route::get('/pergunta8', function () {
    return view('pergunta8');
});
