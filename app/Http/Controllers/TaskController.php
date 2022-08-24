<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
  public function index()
  {
    return view('tasks.index', [
      'tasks' => DB::table('tasks')->get(),
    ]);
  }
}
