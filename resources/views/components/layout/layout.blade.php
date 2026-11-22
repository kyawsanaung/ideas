<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Idea' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body @class(['bg-background', 'font-sans', 'text-foreground'])>
    <x-layout.navbar />

    <main @class(['max-w-7xl', 'mx-auto', 'px-4', 'sm:px-6', 'lg:px-8', 'py-6'])>
        {{ $slot }}
    </main>

    @session('success')
        <div @class([
            'bg-primary',
            'border',
            'border-green-400',
            'text-green-700',
            'px-4',
            'py-3',
            'rounded',
            'absolute',
            'bottom-4',
            'right-4',
            'z-50',
            'text-primary-foreground',
            'text-lg',
            'font-semibold',
        ]) role="alert" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
            x-transition.opacity.duration.500ms>
            {{ $value }}
        </div>
    @endsession

</body>

</html>
