<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('contact', 'contact');
Route::view('about', 'about');

Route::get('profile/{username}', function ($username) {
  return view('profile', [
    'name' => $username,
  ]);
});
