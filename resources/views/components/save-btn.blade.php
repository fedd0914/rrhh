@props([
  'event',
  'title'       => 'Guardar',
  'updatedtext' => null,
  'newLine'     => false
])

<div class="row">
  <div class="col-md-12">
    <p>
        <button  wire:click="{{ $event }}" {{ $attributes->merge(['class' => 'mt-2 ml-6 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple']) }}>
            {{ $title }}
        </button>
      @if ($newLine)
        <br />
      @endif
      @if ($updatedtext != null)
          <small class="text-muted @if (!$newLine) ml-3 @endif">Actualizdo el {{ $updatedtext }}</small>
      @endif

    </p>
  </div>
</div>
