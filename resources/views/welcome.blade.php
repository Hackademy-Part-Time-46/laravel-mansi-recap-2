Homepage

@guest
    Non sei registrato? <a href="{{ route('register') }}">Clicca qui</a>
    Sei gia dei nostri? <a href="{{ route('login') }}">Clicca qui</a>
@endguest
@auth
    Ciao, {{ Auth::user()->name }}
    La mia email è {{ Auth::user()->email }}
    Mi sono registrao il: {{ Auth::user()->created_at }}
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endauth
