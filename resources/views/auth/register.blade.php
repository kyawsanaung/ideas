<x-layout>
   <div class="flex items-center justify-center min-h-[calc(100vh-4rem)] mx-auto max-w-lg">
     <x-layout.form title="Register an account" description="Start tracking your ideas today." class="w-full px-10" method="POST" action="{{ route('register.store') }}">
        <x-layout.form.field label="Name" name="name" />
        <x-layout.form.field label="Email" name="email" type="email" />
        <x-layout.form.field label="Password" name="password" type="password" />
        <x-layout.form.field label="Confirm Password" name="password_confirmation" type="password" />
      

        <div class="flex items-center justify-end gap-4">
            <a href="{{ route("login") }}" class="text-sm text-muted-foreground hover:text-primary">Already registered?</a>

            <button type="submit" class="btn btn-primary" data-test='register-button'>Register</button>
        </div>
    </x-layout.form>
    </div>
</x-layout>
