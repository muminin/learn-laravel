<ul class="navbar">
  @foreach ($navigations as $key => $val)
    <li><a href="{{ $val }}">{{ $key }}</a></li>
  @endforeach
</ul>
