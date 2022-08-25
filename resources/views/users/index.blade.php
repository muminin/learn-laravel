<x-app-layout>
  <div class="container">
    <h1>Users</h1>

    @foreach ($users as $key => $user)
      <li>
        <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
      </li>
    @endforeach
  </div>
</x-app-layout>
