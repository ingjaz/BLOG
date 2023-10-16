<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){
        //return $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]);

        Mail::to('ingjaz_236@hotmail.com')->send(new ContactanosMailable($request->all()));

        //Para enviar informacion a otro formulario tenemos que hacerlo con variables de sesion
        //Un opcion es eesta session()->flash('NOMBRE-VARIABLE', 'MENSAJE');
        //session()->flash('info', 'Mensaje enviado');

        //Otro metodo de envio d edatos es with
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado jgg');

        //return "Mensaje enviado";
        //return redirect()->route('contactanos.index');
    }
}
