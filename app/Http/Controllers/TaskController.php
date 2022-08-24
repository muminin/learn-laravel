<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
  public function index()
  {
    return view('tasks.index', [
      'tasks' => DB::table('tasks')->orderBy('id', 'desc')->get(),
    ]);
  }

  public function create()
  {
    return view('tasks.create');
  }

  public function store(Request $request)
  {
    DB::table('tasks')->insert([
      'list' => $request->list,
    ]);

    return back();
  }
}
