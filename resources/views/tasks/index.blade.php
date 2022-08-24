<x-app-layout>
  <h1>Tasks</h1>

  <ol>
    @foreach ($tasks as $key => $val)
      <li>{{ $val->list }}</li>
    @endforeach
  </ol>
</x-app-layout>
