<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Esta funcion "authorize" se utiliza para comprobar cuando el usuario tiene un determinado rol o permiso
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //Validar informacion, asi se valida con un request, en este caso se valida que los campos no esten en blanco (son requeridos)
        //Para agregar mas reglas en un campo basta con separarlos con "|" y poner la regla que queremos agregar
        return [
            'name' => 'required|min:3|max:20|alpha:ascii',
            'description' => 'required|min:3|max:20',
            'categoria' => 'required|min:3|max:20|alpha:ascii'
        ];
    }

    //Definimos un metodo "messages" para poder cambiar el texto de los mensajes (esto no viene por default al cerar el archivo)
    public function messages()
    {
        return [
            'description.required' => 'La descripcion la necesito',
            'categoria.required' => 'Necesito la categoria'
        ];
    }

    //Definimos un metodo "attributes" para poder cambiar el texto de los atributos (su traduccion) (esto no viene por default al cerar el archivo), 
    //no debemos revolver con message los campos, o modificas messages o modificas attributes
    public function attributes()
    {
        return [
            'name' => 'nombre del curso'
        ];
    }
}
