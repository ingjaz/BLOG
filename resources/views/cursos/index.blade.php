@extends('layouts.plantilla')


@section('title','Inicio')

@section('content')
    <h1>Bienvenido a cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>

    <ul>
        {{-- Estamos extrallendo los registros almacenados en la variablew que mandamos desde el controlador --}}
        {{-- El foreach sirve pide dos cosas, la primera la variable donde se almaceno los datos y dos la variable donde se almacenara la busqueda de navegacion de los datos --}}
        @foreach ($cursos as $curso)
            <li>
                {{-- <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a> --}}
                {{-- <a href="{{route('cursos.show', $curso->name)}}">{{$curso->name}}</a> --}}
                {{-- Gracias a que usamos la funcion getRouteKeyname() en Models\Curso.php no ocupamos definir
                     el valor que le mandaremos a cursos.show, laravel lo detecta en automaticon con al funcion--}}
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>

    {{-- Con esto podemos ejecutar la paginacion con botones automaticamente --}}
    {{-- Esto si usamos en el controlador la funcion ::paginate();--}}
    {{$cursos->links()}}

@endsection
