<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
  public function create()
  {
    return view('auth.register');
  }

  public function store(Request $request)
  {
    request()->validate([
      'email' => ['required', 'email', 'unique:users'],
      'username' => ['required', 'alpha_num', 'min:3', 'max:25', 'unique:users,username'], // gunakan koma disini untuk menandakan kolomnya, ref unique:table,column
      'name' => ['required', 'string', 'min:3'],
      'password' => ['required', 'min:8'],
    ]);

    User::create([
      'email' => $request->email,
      'username' => $request->username,
      'name' => $request->name,
      'password' => Hash::make($request->password),
    ]);

    session()->flash('success', 'You are registered.');
    return view('home');
  }
}
