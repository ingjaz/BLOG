@extends('layouts.plantilla')

@section('title','Curso '. $curso)

@section('content')
    <?php /* Cuando quiera escribir una variable php  echo $curso; mejor usar { { variable a imprimir } } */ ?>
    <h1>Bienvenido al curso: {{$curso}}</h1>
@endsection
