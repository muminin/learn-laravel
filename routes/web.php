<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;

Route::get('/', HomeController::class); // This structure for __invoke or invokable class

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');

Route::middleware('auth')->group(function () {
  Route::resource('tasks', TaskController::class);
  Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function () {
  Route::get('register', [RegistrationController::class, 'create'])->name('register');
  Route::post('register', [RegistrationController::class, 'store']); // valid jika ingin panggil name route, karena sama dengan GET nya

  Route::get('login', [LoginController::class, 'create'])->name('login');
  Route::post('login', [LoginController::class, 'store']);
});
