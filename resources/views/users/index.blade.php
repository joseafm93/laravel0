@extends('layout')

@section('title', 'Listado de usuarios')

@section('content')

            <h1>{{ $title }}</h1>

            @if( ! empty($users))
                <ul>
                    @foreach($users as $user)
                        <li>{{ $user->name }}</li>
                    @endforeach
                </ul>
            @else
                <p>No hay usuarios registrados</p>
            @endif
@endsection

@section('sidebar')
    Barra lateral
@endsection
