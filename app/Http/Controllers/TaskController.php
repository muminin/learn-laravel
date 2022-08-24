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
    Task::create([
      'list' => $request->list,
    ]);

    return back();
  }

  public function edit($id)
  {
    $task = Task::find($id);

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
