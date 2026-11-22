@props(['name'])

@if ($errors->has($name))
    <p id="{{ $name }}-error" class="mt-1 text-sm text-red-600" role="alert">
        {{ $errors->first($name) }}
    </p>
@endif
