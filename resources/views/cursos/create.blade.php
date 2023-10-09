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
            {{-- El metodo old('NOMBRE-CAMPO') permite recuperar la informacion del pasado al validar un campo --}}
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        {{-- La funcion error nos sirve para que nos envie el error de evaluacion a 
            partir de la funcion $request->validate dada en el controlador dentro de la funcion que invica la vista--}}
        @error('name')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label for="">
            Descripcion
            <br>
            <textarea name="description" id="" cols="30" rows="5">{{old('description')}}</textarea>
        </label>
        @error('description')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
    
@endsection
