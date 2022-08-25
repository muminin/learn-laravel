{{-- Nama file menggunakan dikarenakan file hanya dipakai sebagai include jika dibutuhkan --}}
<div class="card">
  <div class="card-header">Create Task</div>
  <div class="card-body">
    <form action="{{ route('tasks.store') }}" method="post">
      @csrf

      @include('tasks._form')
    </form>
  </div>
</div>
