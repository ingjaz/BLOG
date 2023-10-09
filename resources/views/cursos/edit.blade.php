@extends('layouts.plantilla')

@section('title','Edit')

@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    
    <form action="{{route('cursos.update', $id)}}" method="POST">

        {{-- Esta linea sirve para enviar un token oculto para protegre la informacion --}}
        {{-- Laravel lo exige por defecto --}}
        @csrf

        {{-- Cuando queremos utilizar una ruta PUT devemos dejar el metodo post indicado y llamar al metodo put de la sigueinte manera  --}}
        @method('put')

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{$id->name}}">
        </label>
        <br>

        <label for="">
            Descripcion
            <br>
            <input type="text" name="description" value="{{$id->description}}">
        </label>
        <br>

        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{$id->categoria}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
    
@endsection
