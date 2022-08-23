@extends('layouts.app', ['title' => 'Homepage'])

@section('content')
  <x-alert>
    @slot('title')
      Header component with <strong>strong</strong> tag
    @endslot

    Ini adalah children

    @slot('footer')
      Footer
    @endslot
  </x-alert>

  <p>
    This is homepage
  </p>
@endsection
