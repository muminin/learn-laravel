<x-app-layout>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">Login</div>
          <div class="card-body">
            <form action="{{ route('login') }}" method="post">
              @csrf

              <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                  id="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                  id="password" placeholder="*****" value="">
                @error('password')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <button type="submit" class="btn btn-sm btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
