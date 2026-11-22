<nav class="border-b border-border px-6 py-4 flex justify-between">
    <a href="{{ url('/') }}" class="flex items-center" aria-label="Idea home">
        <img src="{{ asset('images/idea-logo.svg') }}" alt="Idea" class="h-10 w-auto">
    </a>

    <div class="flex items-center space-x-4 max-w-4xl mx-auto h-16">
        <a href="#" class="text-foreground font-semibold text-lg hover:text-primary">Home</a>
        <a href="#" class="text-foreground hover:text-primary">About</a>
        <a href="#" class="text-foreground hover:text-primary">Contact</a>
    </div>
    <div class="flex items-center space-x-4">
        @auth
            <span class="text-foreground">Welcome, {{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-foreground hover:text-primary" data-test='logout-button'>Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="text-foreground hover:text-primary">Login</a>
            <a href="{{ route('register') }}" class="btn">Register</a>
        @endauth
    </div>
</nav>
