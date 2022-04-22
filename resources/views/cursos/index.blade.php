
@extends('layouts.plantilla')

@section('title','Mostrar los cursos')

@section('content')
<h1>Bienvenidos a los cursos..</h1>
<a href="{{route('cursos.create') }} ">Crear curso</a>
<ul> {{--aqui muestro los registros de la tabla cursos--}}
    @foreach ($cursos as $curso){{--nombre de la coleccion y variable temporal a mostrar--}}
        <li>
            <a href="{{route('cursos.show',$curso)}}">{{$curso->name}}</a> {{--para que cada item sea un enlace--}}
        </li>{{--entro a la prop name del objeto curso, $curso->id es el parametro a mostrar--}}
    @endforeach
</ul>
<br>
    {{$curso->simplePaginate(13)}} {{--si le pongo <a> muestra > al final y previous activado--}}
    
@endsection()

