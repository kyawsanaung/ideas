@props([
    'label',
    'name',
    'type' => 'text',
])

<div @class(['space-y-2'])>
    <label for="{{ $name }}" @class(['block', 'text-sm', 'font-medium'])>{{ $label }}</label>

    @if ($slot->isEmpty())
        <input
            id="{{ $name }}"
            name="{{ $name }}"
            type="{{ $type }}"
            @if ($type !== 'password') value="{{ old($name) }}" @endif
            aria-invalid="{{ $errors->has($name) ? 'true' : 'false' }}"
            {{ $attributes->merge(['class' => 'w-full rounded-md border border-border bg-background px-3 py-2 text-sm shadow-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary']) }}
        >
    <x-layout.form.error name="{{ $name }}" />
    @else
        {{ $slot }}
    @endif
</div>
