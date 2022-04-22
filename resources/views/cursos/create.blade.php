@extends('layouts.plantilla')

@section('title','Crear curso')

@section('content')
<h1>En esta pagina puedes crear un curso.</h1><br>
<form action="{{route('cursos.store')}} " method="POST">
    @csrf {{--agrega un token para que la pagina no expire.--}}
    <label>
        Nombre:<br>
{{--para que no se borren los campos llenos, si falto alguno de llenar uso value--}}
        <input type="text"name="name"value="{{old('name')}}">
    </label><br>
{{--los mensajes de error estan en la carpeta lang/en/validation.php--}}
{{--para que lea la carpeta es de lang, cambio la carpeta config/app.php-->locale a es y en validation.php cambio name a nombre--}}
    @error('name'){{--validacion de campo lleno--}}
        <br>
            <small>*{{$message}}</small>
        <br>

    @enderror

    <br><label>
        Descripción:<br>
        <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
    </label><br>

    @error('descripcion'){{--validacion de campo lleno--}}
        <br>
            <small>*{{$message}}</small>
        <br>

    @enderror

    <br><label>
        Categoría:<br>
        <input type="text"name="categoria"value="{{old('categoria')}}">
    </label><br>

    @error('categoria'){{--validacion de campo lleno--}}
        <br>
            <small>*{{$message}}</small>
        <br>

    @enderror

    <br><button type="submit">Enviar</button>
</form>
@endsection()
