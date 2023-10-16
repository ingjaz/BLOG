<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;

//Con esta linea estamos mandando a llamar el contrtolador que quiero utilizar
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

//7 rutas del CRUD de cursos
/*Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create'); 
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store'); 

Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
//Nota cuando quieras actualizar (update) Laravel reciemda el metodo put
Route::put('cursos/{id}', [CursoController::class, 'update'])->name('cursos.update');
//Eliminar Nota cuando quieras eliminar (delete) Laravel reciemda el metodo delete
Route::delete('cursos/{id}', [CursoController::class, 'destroy'])->name('cursos.destroy');*/

//rutas con route resource, podemos hacer mas rapido las rutas, esto se basa en el nombre de las funciones que creamos en los controller
// si queremos cambiar el nombre usando reosurce podemos basarnos en lo que indica laravel https://laravel.com/docs/10.x/controllers#restful-localizing-resource-uris
// Devemos ir a la direccion App\Providers\RouteServiceProvider
Route::resource('cursos', CursoController::class);

//Si queremos cambiarle el nombre principal a la ruta debemso usar la funcion 'names'
//Route::resource('asignaturas', CursoController::class)->names('cursos');

//Si por lo anterior tenemos problemas en las varibles en los controladores podemso usar un nuevo parametro "parameters"
//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');




//Creacion de grupos para controladores, esto es, si hay varias rutas con el mismo controlador
//estas se pueden agrupar en un solo bloque
//el ->name('NOMBRE'); me permite poner un alias al acceso de la ruta y con ella acceder
/*Route::controller(CursoController::class)->group(function () {
    Route::get('cursos', 'index')->name('cursos.index');
    
    // esto es lo mismo que el de abajo:   Route::get('sasasa', 'create')->name('cursos.create'); 
    Route::get('cursos/create', 'create')->name('cursos.create');  

    //Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');   Si estuviera fuera del grupo asi seria
    Route::post('cursos', 'store')->name('cursos.store');

    Route::get('cursos/{id}', 'show')->name('cursos.show');
});*/


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

//Esto nos sirve cuando queremos mostrar ocmntenido estatico, Route::view('URI', 'viewname');
//Este espera dos parametros, URI el nombre de la url, el segundo viewname es el nombre de la vista
    Route::view('nosotros', 'nosotros')->name('nosotros');

//Para enviar correos prueba
 /*Route::get('contactanos', function () {
     Mail::to('ingjaz_236@hotmail.com')->send(new ContactanosMailable);

     return "Mensaje enviado";
 })->name('contactanos');*/

//Para crear formulario
    Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
//Para enviar formulario
    Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
