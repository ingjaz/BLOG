<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    /*Si yo quiero que el modelo ignore la convension de la tabla que debe de atender a
    partir del nombre del modelo pongo:*/
    //protected $table = "users";

    
}
