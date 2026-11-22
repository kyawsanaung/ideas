<x-layout>
    <div class="mx-auto flex min-h-[calc(100vh-4rem)] max-w-lg items-center justify-center">
        <x-layout.form title="Welcome back" description="Log in to continue tracking your ideas." class="w-full px-10" method="POST" action="{{ route('login.store') }}">
            @csrf

            <x-layout.form.field label="Email" name="email" type="email" autocomplete="email" />

            <x-layout.form.field label="Password" name="password" type="password" autocomplete="current-password" />

            <div class="flex items-center justify-end gap-4">
                <a href="{{ route('register') }}" class="text-sm text-muted-foreground hover:text-primary">Need an account?</a>

                <button type="submit" class="btn btn-primary" data-test='login-button'>Log in</button>
            </div>
        </x-layout.form>
    </div>
</x-layout>
