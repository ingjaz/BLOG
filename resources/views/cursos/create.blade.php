@extends('layouts.plantilla')

@section('title','Create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    
    <form action="{{route('cursos.store')}}" method="POST">

        {{-- Esta linea sirve para enviar un token oculto para protegre la informacion --}}
        {{-- Laravel lo exige por defecto --}}
        @csrf

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <label for="">
            Descripcion
            <br>
            <input type="text" name="description">
        </label>
        <br>

        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
    
@endsection
