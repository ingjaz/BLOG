<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        //return "Bienvenido a cursos";
        return view('cursos.index');
    }

    public function create(){
        //return "En esta pagina podras crear un curso";
        return view('cursos.create');
    }

    public function show($curso){
       // return "Bienvenido al curso: $curso";
       //Una manera de enviar variables a una vista es return view('cursos.show',['curso'=>$curso]);
       //Otra manera es compact('curso'); que equivale a ['curso'=>$curso] por ejemplo
       return view('cursos.show', compact('curso'));
    }

}
