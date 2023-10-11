<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Curso extends Model
{
    use HasFactory;
    /*Si yo quiero que el modelo ignore la convension de la tabla que debe de atender a
    partir del nombre del modelo pongo:*/
        //protected $table = "users";


    //En tema de ASIGNACION MASIVA se agrega la variable 
    //$fillable   Para incicar los campos que SI queremos que se utilicen, los campos que no pongamos en el areglo Eloquent no permitira que se utilicen y 
    //solo perimitira que se cree el registro con los campos que indicaste en el arreglo
        //protected $fillable = ['name', 'description', 'categoria'];

    //$guarded Para incicar los campos que NO queremos que se utilicen, los campos que pongamos en el areglo Eloquent no permitira que se utilicen y 
    //solo perimitira que se cree el registro con los campos que no indicaste en el arreglo
    //Nota: Si no tenemos nada que proteger de campos podemos dejar el arreglo en blanco y guarded nos permite seguir avanzando
        protected $guarded = [];

    


    //Esto es un mutador/accesor el cual modifica el valor que ingrese el usuario, en este caso
    //este mutado afecta el campo "name" por ese motivo nosotros le pusimos ese nombre,
    //dependinedo del campo que modifiquemos debemos ponerle el mismo nombre a la funcion
    //El accesor afecta el resultado solo cuando haces una consulta
    //set = mutador,  get = accesor
    //Este mutador hace que todo lo que ingrese el usuario en el campo name se cambie a minusculas y lo almacena en base de datos
    //https://laravel.com/docs/10.x/eloquent-mutators
    protected function name(): Attribute
    {
        return new Attribute(
            /*get: function($value){
                return ucwords($value);
            },
            set: function($value){
                return strtolower($value);
            }*/
            
            get: fn ($value) => ucfirst($value),
            set: fn ($value) => strtolower($value)
            

        );
    }

    
}
