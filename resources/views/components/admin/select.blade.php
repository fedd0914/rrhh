@props(
    ['title',
    'model',
    'values'      => [],
    'classes'     => null,
    'hint'        => null,
    'required'    => false,
    'disabled'    => false,
    'tabindex'    => 1,
    'multi'       => false,
    'noOpcion'    => false,
    'id'          => ''
])

<div class="{{ $classes }}">
    <div class="form-group">
        <label class="text-gray-700 dark:text-gray-400">{{ $title }}</label>
        <select
            @if($id != '') id={{$id}} @endif
            @if($id != '') name={{$id}} @endif
            {!! $attributes->merge(['class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input']) !!}
            wire:model.lazy='{{ $model }}'
            @if ($required) required @endif
            @if ($disabled) disabled @endif
            @if ($multi) multiple @endif
            tabindex={{ $tabindex }}
        >
            @if ($noOpcion)
            <option value="">Escoja una opcion</option>
            @endif
            @foreach ($values as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <small class="form-text text-muted">{{ $hint }}</small>
    </div>
</div>
