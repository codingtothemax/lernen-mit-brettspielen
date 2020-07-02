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
    return view('home');
})->name('home');

Route::get('kreative-spiele', function () {
    return view('creativity');
})->name('creativity');

Route::get('spiele-rund-um-sprache', function () {
    return view('language');
})->name('language');

Route::get('spiele-zum-thema-zahlen-und-rechnen', function () {
    return view('numbers');
})->name('numbers');

Route::get('geografie', function () {
    return view('places');
})->name('places');

/** MISC **/
Route::get('impressum', function () {
    return view('misc.imprint');
})->name('imprint');

Route::get('datenschutz', function () {
    return view('misc.legal');
})->name('legal');
