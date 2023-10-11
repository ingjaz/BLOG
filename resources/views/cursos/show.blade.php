@extends('layouts.plantilla')

@section('title','Curso '. $curso->name)

@section('content')
    <?php /* Cuando quiera escribir una variable php  echo $curso; mejor usar { { variable a imprimir } } */ ?>
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>

    <p><strong>Categoria: </strong> {{$curso->categoria}}</p>
    <p><strong>Descripcion: </strong >{{$curso->description}}</p>

        {{-- Pasamos token para poder utilizar el metodo delete --}}
        <form action="{{route('cursos.destroy', $curso)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
@endsection
