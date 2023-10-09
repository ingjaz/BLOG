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
        //Muestra en esta linea todos los cursos en orden Ascendente
        //$cursos = Curso::paginate();

        $cursos = Curso::orderBy('id', 'desc')->paginate();


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

    public function store(Request $request){
        //Validar informacion, asi se valida con un request, en este caso se valida que los campos no esten en blanco (son requeridos)
        //Para agregar mas reglas en un campo basta con separarlos con "|" y poner la regla que queremos agregar
        $request->validate([
            'name' => 'required|min:3|max:20|alpha:ascii',
            'description' => 'required|min:3|max:20',
            'categoria' => 'required|min:3|max:20|alpha:ascii'
        ]);


        //Recupero y veo todo el contenido que se envio por metodo POST
        //return $request->all();

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        //return $curso;
        $curso->save();

        return redirect()->route('cursos.show', $curso->id);

    }

    public function show($id){

        $curso = Curso::find($id);

        //return $curso;

       // return "Bienvenido al curso: $curso";
       //Una manera de enviar variables a una vista es return view('cursos.show',['curso'=>$curso]);
       //Otra manera es compact('curso'); que equivale a ['curso'=>$curso] por ejemplo
       return view('cursos.show', compact('curso'));
    }

    //Al crear una variable de la misma clase se obtiene todos los dtaos
    //es igual a esto $curso = Curso::find($id); cuando el parametro es solo $id (sin la palabra Curso (la clase))
    public function edit(Curso $id){

        //$curso = Curso::find($id);
        //return $id;
        return view('cursos.edit', compact('id'));
    }

    public function update(Request $request, Curso $id){
        $request->validate([
            'name' => 'required|min:3|max:20|alpha:ascii',
            'description' => 'required|min:3|max:20',
            'categoria' => 'required|min:3|max:20|alpha:ascii'
        ]);

        

        //Recupero y veo todo el contenido que se envio por metodo POST - PUT
        //return $id;
        //return $request->all();

        $id->name = $request->name;
        $id->description = $request->description;
        $id->categoria = $request->categoria;

        //return $curso;
        $id->save();

        return redirect()->route('cursos.show', $id->id);

    }

}
