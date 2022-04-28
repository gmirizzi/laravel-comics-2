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

Route::get('/', function () {
    return view('home');
});

Route::get('/comics', function () {
    $fumetti = config('comics');
    $data = [
        'fumetti'=> $fumetti
    ];
    return view('comics', $data);
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    return view('comic');
})->name('comic');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');
