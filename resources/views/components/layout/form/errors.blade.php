@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'rounded-md border border-destructive/30 bg-destructive/5 p-4 text-sm text-destructive']) }} role="alert" aria-labelledby="form-errors-title">
        <p id="form-errors-title" class="font-medium">Please fix the following errors:</p>
        <ul class="mt-2 list-inside list-disc space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
