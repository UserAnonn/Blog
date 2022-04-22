<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//si el usuario que intenta entrar tiene los permisos correspondientes devuelve true
        return true;//instalo un paquete con validaciones ya hechas
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ];
    }
    public function attributes()
    {
        return[
            'name' => 'nombre del curso'
        ];
    }
}
