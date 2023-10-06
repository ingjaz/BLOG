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
