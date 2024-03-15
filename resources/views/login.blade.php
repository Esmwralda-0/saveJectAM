<x-layout>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <h1 class="text-4x1">Sign in</h1>

    <form action="/login" method="POST">
        @csrf
        <div>
            <x-input rex="email" titulo="email★" tipo="email" />
        </div>
        <div>
            <x-input rex="password" titulo="password★" tipo="password" />
        </div>
        <button type="submit">Log In</button>
    </form>
</x-layout>
