<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', HomeController::class); // This structure for __invoke or invokable class

Route::resource('tasks', TaskController::class)->middleware('auth');

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');

Route::middleware('guest')->group(function () {
  Route::get('register', [RegistrationController::class, 'create'])->name('register');
  Route::post('register', [RegistrationController::class, 'store']); // valid jika ingin panggil name route, karena sama dengan GET nya

  Route::get('login', [LoginController::class, 'create'])->name('login');
  Route::post('login', [LoginController::class, 'store']);
});
