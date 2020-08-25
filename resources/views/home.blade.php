<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi primera vista</title>
</head>

<body>
    <h1>Hola - {{ "hola mundo $nombre $apellido" }} </h1>
    <ul>
        @forelse ($posts as $post)
            
        <li> @if ($loop->first)
            primero:
        @endif
       {{ $post }}</li>
        @empty
          <li>vacio</li>  
        
        @endforelse
    </ul>
</body>

</html>
