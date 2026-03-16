<nav class="border-b border-border px-6">
    <div class="max-w-7x1 mx-auto h-16 flex items-center justify-between">
        <div>
            <a href="/" class="">
                <img src="{{ asset('images/logo.svg') }}" width="50" alt="Idea Logo">
            </a>

        </div>

        <div class="flex items-center gap-x-5">
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn" >Log Out</button>
                </form>
            @endauth

            @guest
                <a href="/login" class="btn">Sign in</a>
                <a href="/register" class="btn">Register</a>
            @endguest
        </div>
    </div>
</nav>
