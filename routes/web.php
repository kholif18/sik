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
    return view('dashboard.index');
});

Route::get('/category', function () {
    return view('category.category');
});

Route::get('/transactions', function () {
    return view('transactions.transactions');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/user', function () {
    return view('user.user');
});
