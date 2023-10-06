<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        //CRUD para ver los cursos almacenas en tabla cursos 
        //recupero todos los cursos, vista masiva
        //$cursos = Curso::all();
        //recupero los cursos paginados, para pderlos ver despues de la url agrego ?page=x
        //ejemplo http://localhost/BLOG/public/cursos?page=2
        $cursos = Curso::paginate();
        //Aqui me devuelve todo lo consultado en formato json
        //return $cursos;

        //return "Bienvenido a cursos";

        //Mando al consulta a la vista
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        //return "En esta pagina podras crear un curso";
        return view('cursos.create');
    }

    public function show($id){

        $curso = Curso::find($id);

        //return $curso;

       // return "Bienvenido al curso: $curso";
       //Una manera de enviar variables a una vista es return view('cursos.show',['curso'=>$curso]);
       //Otra manera es compact('curso'); que equivale a ['curso'=>$curso] por ejemplo
       return view('cursos.show', compact('curso'));
    }

}
