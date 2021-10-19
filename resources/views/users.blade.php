<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
</head>
<body>
    <h1>{{ $title }}</h1>


    @if( ! empty($users))
        <ul>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
        </ul>
    @else
        <p>No hay usuarios registrados</p>
    @endif

    @empty($users)
        <p>No hay usuarios registrados</p>
        @else 
            <ul>
            @foreach($users as $user)
                <li>{{ $user }}</li>
            @endforeach
            </ul>
        
    @endempty

    <ul>
        @forelse($users as $user)
        <li>{{ $user }}</li>
        @empty
        <p>No hay usuarios registrados</p>
        @endforelse

    </ul>

</body>
</html>