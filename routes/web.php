<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return redirect()->route('login');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('employee', EmployeeController::class);