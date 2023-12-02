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
    return view('login');
});

Route::get('/detailWorkshop', function () {
    return view('detailWorkshop');
});
Route::get('/register', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/workshops', function () {
    return view('workshops');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/admin', function () {
    return view('adminWorkshop');
});