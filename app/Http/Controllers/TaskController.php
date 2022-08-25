<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function index()
  {
    return view('tasks.index', [
      'tasks' => Task::latest()->get(),
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'list' => ['required'],
    ]);

    Task::create($request->all());

    return back();
  }

  public function edit(Task $task)
  {
    return view('tasks.edit', [
      'task' => $task,
    ]);
  }

  public function update(Request $request, $id)
  {
    Task::find($id)->update([
      'list' => $request->list,
    ]);

    return redirect('tasks');
  }

  public function destroy($id)
  {
    Task::find($id)->delete();

    return back();
  }
}
