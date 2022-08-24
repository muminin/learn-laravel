<x-app-layout>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Create Task</div>
          <div class="card-body">
            <form action="/tasks" method="post" class="d-flex">
              @csrf
              <input type="text" class="form-control me-2" name="list" placeholder="Task Name">

              <button type="submit" class="btn btn-primary">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <ul class="list-group mt-4">
      @foreach ($tasks as $key => $val)
        <li class="list-group-item d-flex align-items-center justify-content-between">
          {{ $key + 1 }}. {{ $val->list }}

          <div class="d-flex">
            <a class="btn btn-sm btn-warning me-2" href="/tasks/{{ $val->id }}">Edit</a>
            <form action="/tasks/{{ $val->id }}" method="post">
              @method('delete')
              @csrf

              <button style="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
</x-app-layout>
