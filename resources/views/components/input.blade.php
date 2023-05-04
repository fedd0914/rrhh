@props([
    'disabled' => false,
    'title',
    'model',
    'type'        => 'text',
    'classes'     => null,
    'hint'        => null,
    'required'    => false,
    'disabled'    => false,
    'noComplete'  => false,
    'placeholder' => null,
    'tabindex'    => 1
])


<div class="{{ $classes }}">
    <div class="form-group">
        <label class="text-gray-700 dark:text-gray-400">{{ $title }}</label>
        <input
            {{ $disabled ? 'disabled' : '' }}
            {!! $attributes->merge(['class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input']) !!}
            type="{{ $type }}"
            wire:model.lazy='{{ $model }}'
            placeholder="{{ $placeholder }}"
            @if ($required) required @endif
            @if ($disabled) disabled @endif
            @if ($noComplete) autocomplete="off" @endif
            tabindex={{ $tabindex }}

        >
        <small class="form-text text-muted">{{ $hint }}</small>
        @error($model) <div class="text-danger">{{ $message }}</div> @enderror
    </div>
</div>

