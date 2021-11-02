@extends('layout')

@section('title', 'Detalles de un usuario')

@section('content')
    <div class="card">
        <div class="card-header h4">
            Crear nuevo usuario
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h6>Por favor, corrige los siguientes errores</h6>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form action="{{ route('users.store') }}" method="post">
                    {{ csrf_field() }}

                    <label for="name">Nombre:</label>
                    <input type="text" name="name" value="{{ old('name') }}">
                    <br>
                    <label for="email">Correo electrónico:</label>
                    <input type="email" name="email" value="{{ old('email') }}">
                    <br>
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password">
                    <br>

                    <button type="submit">Crear usuario</button>
                </form>
        </div>
    </div>

    <div class="card-footer">
        <p>
            <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
        </p>
    </div>
@endsection