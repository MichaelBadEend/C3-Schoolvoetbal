@guest
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Registreren</a>
@endguest

@auth
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="Logout">
    </form>
@endauth
