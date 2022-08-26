<nav class="navbar navbar-expand-lg bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">Niman Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @foreach ($navigations as $key => $val)
          <li class="nav-item">
            <a class="nav-link" href="{{ $val }}">{{ $key }}</a>
          </li>
        @endforeach
      </ul>

      <ul class="navbar-nav mb-2 mb-lg-0">
        {{-- Bisa menggunakan @auth @endauth untuk mengecek apakah user sudah login --}}
        {{-- Karena @guest @endguest digunakan untuk mengecek apakah user belum login --}}

        @guest
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link">Register</a>
          </li>
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              {{ Auth::user()->username }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
