<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Cuando utilizamos __invoke signfica que queremso que el controlador administre una sola ruta
    public function __invoke(){
        //return view('welcome');
        return "Hola mundo";
    }
}
