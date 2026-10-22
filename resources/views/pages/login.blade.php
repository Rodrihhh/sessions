@extends('layouts.app')

@section('content')
<div style="padding: 20px;">
    <h2>Iniciar Sesión</h2>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <label>Correo Electrónico:</label><br>
            <input type="email" name="email" required value="{{ old('email') }}">
        </div>
        <div style="margin-bottom: 10px;">
            <label>Contraseña:</label><br>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Iniciar Sesión</button>
    </form>
</div>
@endsection