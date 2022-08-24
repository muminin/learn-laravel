<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class); // This structure for __invoke or invokable class

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

Route::get('profile/{name}', ProfileInformationController::class);

Route::get('tasks', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'store']);
