@extends('layouts.plantilla')

@section('title','Edit')

@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        {{-- Esta linea sirve para enviar un token oculto para protegre la informacion --}}
        {{-- Laravel lo exige por defecto --}}
        @csrf

        {{-- Cuando queremos utilizar una ruta PUT devemos dejar el metodo post indicado y llamar al metodo put de la sigueinte manera  --}}
        @method('PUT')

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label for="">
            Descripcion
            <br>
            <textarea name="description" id="" cols="30" rows="5">{{old('description', $curso->description)}}</textarea>
        </label>
        {{-- La funcion error nos sirve para que nos envie el error de evaluacion a 
            partir de la funcion $request->validate dada en el controlador dentro de la funcion que invica la vista--}}
        @error('description')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
    
@endsection
