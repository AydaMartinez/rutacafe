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
    return view('dMatagalpa');
})->name('dMatagalpa');

Route::get('dEsteli', function () {
    return view('dEsteli');
})->name('dEsteli');

Route::get('dNueva', function () {
    return view('dNueva');
})->name('dNueva');

Route::get('dMadriz', function () {
    return view('dMadriz');
})->name('dMadriz');

Route::get('dJinotega', function () {
    return view('dJinotega');
})->name('dJinotega');