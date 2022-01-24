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

// NCERT BOOKS Route
Route::get('/IssueNCERTbook', [App\Http\Controllers\bookDetialsController::class, 'ncertBook'])->name('ncert.book');

// NCERT BOOKS Route
Route::get('/IssueCBSEbook', [App\Http\Controllers\bookDetialsController::class, 'cbseBook'])->name('cbse.book');

Route::get('/IssueICSEbook', function () {
    return view('IssueICSEbook');
});
Route::get('/IssueMSBTEbook', function () {
    return view('IssueMSBTEbook');
});
Route::get('/IssueOTHERSbook', function () {
    return view('IssueOTHERSbook');
});

//demo
Route::get('/web', function () {
    return view('layouts.app');
});

Route::get('/BookIssueform', function(){
    return view('IssueBookform');
})->middleware('auth')->name('IssueBookInfo.form');

// order route section
Route::get('/orders', [App\Http\Controllers\userOrderController::class, 'userOrder'])->middleware('auth')->name('order.list');
// order route section end

Route::get('/userProfile', function () {
    return view('userProfile');
})->middleware('auth')->middleware('verified');

// Image Route to save image
Route::post('/image', [App\Http\Controllers\userController::class, 'userImage'])->name('user.image');

// Donate Form Route
Route::post('/donate', [App\Http\Controllers\donarController::class, 'donarDetails'])->name('donar.details');

// Update User Details
Route::post('/UpdateUser', [App\Http\Controllers\updateUserController::class, 'updateUser'])->name('updateUser.details');

// Issue book form
Route::post('/issueBook', [App\Http\Controllers\issueBookController::class, 'issueBook'])->name('issuebook.form');


// Route for cart
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('cart', [App\Http\Controllers\ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\ProductController::class, 'remove'])->name('remove.from.cart');


// verify email address
Auth::routes(['verify' => true]);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
// demo
// Route::get('/userform', [App\Http\Controllers\HomeController::class, 'cart'])->name('userfrom');
