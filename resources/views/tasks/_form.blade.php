<div class="mb-2">
  <input type="text" class="form-control @error('list') is-invalid @enderror" name="list"
    value="{{ old('list', $task->list) }}" placeholder="Task Name">
  @error('list')
    <span class="invalid-feedback">{{ $message }}</span>
  @enderror
</div>

<button type="submit" class="btn btn-sm btn-success">{{ $submit }}</button>
