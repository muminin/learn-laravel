{{-- Nama file menggunakan dikarenakan file hanya dipakai sebagai include jika dibutuhkan --}}
<div class="card">
  <div class="card-header">Create Task</div>
  <div class="card-body">
    <form action="{{ route('tasks.store') }}" method="post">
      @csrf

      <div>
        <input type="text" class="form-control me-2 @error('list') is-invalid @enderror" name="list"
          placeholder="Task Name">
        @error('list')
          <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary mt-2">Add</button>
    </form>
  </div>
</div>
