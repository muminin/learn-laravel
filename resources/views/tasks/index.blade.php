<x-app-layout>
  <div class="container">
    <div class="row">
      <div class="col-md-6">

        @include('tasks._create')

      </div>
    </div>

    <ul class="list-group mt-4">
      @foreach ($tasks as $key => $val)
        <li class="list-group-item d-flex align-items-center justify-content-between">
          {{ $key + 1 }}. {{ $val->list }}

          <div class="d-flex">
            <a class="btn btn-sm btn-warning me-2" href="{{ route('tasks.edit', $val->id) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $val->id) }}" method="post">
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
