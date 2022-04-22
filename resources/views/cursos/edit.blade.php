@extends('layouts.plantilla')

@section('title','Editar curso')

@section('content')
<h1>En esta pagina puedes editar un curso.</h1><br>
<form action="{{route('cursos.update',$curso)}} " method="POST">

    @csrf {{--agrega un token para que la pagina no expire.--}}
    
    @method('put'){{--crear metodo put en el controlador--}}
    
    <label>
        Nombre:<br>
        <input type="text"name="name"value="{{old('name', $curso->name)}}">
    </label><br>
    
    @error('name'){{--validacion de campo lleno--}}
        <br>
            <small>*{{$message}}</small>
        <br>

    @enderror
    
    <br><label>
        Descripción:<br>
        <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
    </label><br>
    
    @error('descripcion'){{--validacion de campo lleno--}}
        <br>
            <small>*{{$message}}</small>
        <br>

    @enderror

    <br><label>
        Categoría:<br>
        <input type="text"name="categoria"value="{{old('categoria', $curso->categoria)}}">
    </label><br>

    @error('categoria'){{--validacion de campo lleno--}}
        <br>
            <small>*{{$message}}</small>
        <br>

    @enderror 

   <br><button type="submit">Actualizar</button>{{--la ruta para mandar info con put esta en web.php--}}
</form>
@endsection()