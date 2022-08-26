<x-app-layout>
  <div class="container">
    <div class="row">
      <div class="col-6">
        @if (session()->has('success'))
          <div class="alert alert-success" role="alert">{{ session()->get('success') }}</div>
        @endif

        <div class="card">
          <div class="card-header">Welcome to Niman Laravel</div>
          <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, voluptatem tenetur! Culpa praesentium a omnis.
            Saepe nulla, sapiente voluptatum repellat officia repudiandae alias distinctio cum voluptate asperiores esse
            adipisci odio!
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
