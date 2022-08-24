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
    </div>
  </div>
</nav>
