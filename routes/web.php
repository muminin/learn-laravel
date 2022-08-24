<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

Route::get('profile/{name}', ProfileInformationController::class);
