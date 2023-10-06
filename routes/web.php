<?php

use Illuminate\Support\Facades\Route;

//Con esta linea estamos mandando a llamar el contrtolador que quiero utilizar
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

//Creacion de grupos para controladores, esto es, si hay varias rutas con el mismo controlador
//estas se pueden agrupar en un solo bloque
//el ->name('NOMBRE'); me permite poner un alias al acceso de la ruta y con ella acceder
Route::controller(CursoController::class)->group(function () {
    Route::get('cursos', 'index')->name('cursos.index');
    // esto es lo mismo que el de abajo:   Route::get('sasasa', 'create')->name('cursos.create'); 
    Route::get('cursos/create', 'create')->name('cursos.create');  
    Route::get('cursos/{id}', 'show')->name('cursos.show');
});


 //Si queremos que alguna variable sea opcional solo basta con poner
 //el simbolo de ? al final de cada variable de este tipo
 //Si hacemos esto tenemos que incializar la variable como null
/*
 Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    //El if si dejo la variable sin una condicion logica equivale a evaluar $categoria != null)
    if($categoria){
        return "Bienvenido al curso: $curso, de la categoria: $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }
 });
*/
