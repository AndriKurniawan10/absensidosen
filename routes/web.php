<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('dashadmin', function () {
    return view('dashadmin');
});

Route::get('/datab', function () {
    return view('datab');
});

Route::get('/keldos', function () {
    return view('keldos');
});

Route::get('/kelmatkul', function () {
    return view('kelmatkul');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});