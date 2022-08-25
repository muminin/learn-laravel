<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
  public function index()
  {
    return view('tasks.index', [
      'task' => new Task,
      'tasks' => Task::latest()->get(),
      'submit' => "Create",
    ]);
  }

  public function store(TaskRequest $request)
  {
    Task::create($request->all());

    return back();
  }

  public function edit(Task $task)
  {
    return view('tasks.edit', [
      'task' => $task,
      'submit' => "Update",
    ]);
  }

  public function update(TaskRequest $request, $id)
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
