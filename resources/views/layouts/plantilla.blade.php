<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
</head>
<body>

    <header>
        <h1>Pagina de prueba</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}} ">Home</a></li>
                <li><a href="{{route('cursos.index')}}">Cursos</a></li>
                <li><a href="{{route('home')}}">Nosotros</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>