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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms_conds', function () {
    return view('terms_conds');
});

Route::get('/return', function () {
    return view('return');
});

Route::get('/bookcondition', function () {
    return view('bookcondition');
});

Route::get('/donate', function () {
    return view('donate');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
