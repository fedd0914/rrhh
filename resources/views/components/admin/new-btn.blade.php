@props(['route','title' => 'Agregar'])

<div class="row">
    <br>
  <div class="col-md-12">
    <p>
      <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="{{ route($route) }}">
          <i class="fas fa-plus-circle"></i>
          {{ $title }}
      </a>
    </p>
  </div>
</div>
