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

Route::get('/login', function () {
    return view('login');
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

Route::get('/events', function () {
    return view('events');
});

Route::get('/pride', function () {
    return view('pride');
});

Route::get('/login', function () {
    return view('layouts.app');
});



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
// demo
Route::get('/userform', [App\Http\Controllers\HomeController::class, 'cart'])->name('userfrom');
