<x-app-layout>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Edit Task</h1>

        <div style="margin-bottom: 10px;">
          <form action="{{ route('tasks.update', $task->id) }}" method="post">
            @method('put')
            @csrf

            <div class="mb-2">
              <input type="text" class="form-control @error('list') is-invalid @enderror" name="list"
                value="{{ $task->list }}" placeholder="Task Name">
              @error('list')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <button type="submit" class="btn btn-sm btn-success">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
