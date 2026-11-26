<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

// Redirect halaman utama ke Employee List (Modul 11)
Route::redirect('/', '/employees');

// Bab 3: Halaman Home
Route::get('home', [HomeController::class, 'index'])->name('home');

// Bab 4: Halaman My Profile
Route::get('profile', ProfileController::class)->name('profile');

// Bab 5: Halaman Employee List (Resource Controller)
Route::resource('employees', EmployeeController::class);
