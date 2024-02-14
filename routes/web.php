<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About_Me', function () {
    return view('Tis i mwehehehe');
});

Route::get('/Skills', function () {
    return view('I am trying');
});

Route::get('/Hobbies', function () {
    return view('I cant read');
});