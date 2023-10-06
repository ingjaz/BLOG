@extends('layouts.plantilla')

@section('title','Curso '. $curso->name)

@section('content')
    <?php /* Cuando quiera escribir una variable php  echo $curso; mejor usar { { variable a imprimir } } */ ?>
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p><strong>Categoria: </strong> {{$curso->categoria}}</p>
    <p><strong>Descripcion: </strong >{{$curso->description}}</p>
@endsection
