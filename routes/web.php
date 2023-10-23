<?php

use App\Http\Controllers\CategoryController;
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


Route::get('/category',[CategoryController::class, 'index'])->name('category');

Route::get('/category/create', [CategoryController::class, 'create'])->name('create-category');

Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category-show');
Route::post('/category', [CategoryController::class, 'store'])->name('category-store');
Route::post('/category/edit{$id}', [CategoryController::class, 'edit'])->name('category-edit');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category-delete');

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
