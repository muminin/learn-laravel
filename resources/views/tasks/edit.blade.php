<x-app-layout>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Edit Task</h1>

        <div style="margin-bottom: 10px;">
          <form action="{{ route('tasks.update', $task->id) }}" method="post">
            @method('put')
            @csrf

            @include('tasks._form')
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
