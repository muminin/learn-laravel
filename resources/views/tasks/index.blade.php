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
        <li>{{ $key + 1 }}. {{ $val->list }}</li>
      @endforeach
    </ul>
  </div>
</x-app-layout>
