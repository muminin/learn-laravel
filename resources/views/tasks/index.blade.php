<x-app-layout>
  <h1>Tasks</h1>

  <div style="margin-bottom: 10px;">
    <form action="/tasks" method="post">
      @csrf
      <input type="text" name="list" placeholder="Task Name">

      <button type="submit">Add</button>
    </form>
  </div>

  <div>
    <ul style="list-style-type: none;">
      @foreach ($tasks as $key => $val)
        <li>
          {{ $key + 1 }}. {{ $val->list }} -
          <a href="/tasks/{{ $val->id }}" style="color: yellow;">Edit</a> -
          <form action="/tasks/{{ $val->id }}" method="post" style="display: inline-block;">
            @method('delete')
            @csrf

            <button style="submit">Delete</button>
          </form>
        </li>
      @endforeach
    </ul>
  </div>
</x-app-layout>
