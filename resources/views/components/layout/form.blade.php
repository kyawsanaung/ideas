@props([
    'title' => null,
    'description' => null,
])

<form {{ $attributes->merge(['class' => 'space-y-6']) }}>
    @if ($title || $description)
        <header @class(['space-y-1', 'text-center'])>
            @if ($title)
                <h1 @class(['text-2xl', 'font-semibold', 'tracking-tight'])>{{ $title }}</h1>
            @endif

            @if ($description)
                <p @class(['text-sm', 'text-muted-foreground'])>{{ $description }}</p>
            @endif
        </header>
    @endif

    {{ $slot }}
</form>
