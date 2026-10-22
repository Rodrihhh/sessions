<header>
    <nav style="display: flex; gap: 15px; align-items: center; padding: 10px; background: #f4f4f4;">
        <a href="{{ route('home') }}">Inicio</a>

        @if(session()->has('token'))
            <span>Hola, {{ session('name') }}</span>
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit">Cerrar Sesión</button>
            </form>
        @else
            <a href="{{ route('login') }}">Iniciar Sesión</a>
            <a href="#">Crear Cuenta</a>
        @endif
    </nav>
</header>