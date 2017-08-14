<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //REGEX:
            //https://stackoverflow.com/questions/37180170/regex-validation-letters-dots-and-dash-laravel
            //https://social.msdn.microsoft.com/Forums/es-ES/ebaaf4d9-2f7e-4088-aea4-19b76cc15c57/permitir-ciertos-caracteres-en-este-patron-de-regex?forum=vcses
            //Corregir error con campos unique cuando actualizamos un registro:
            //https://laraveltips.wordpress.com/2015/05/24/validation-request-laravel-5-how-to-handle-validation-on-update/
            'cedula' => 'required|numeric|digits_between:7,8|unique:cruds,id,'.$this->get('id'),
            'apellidos' => 'required|regex:/^[A-Za-z. ñÑáéíóúÁÉÍÓÚ]+$/',
            'nombres' => 'required|regex:/^[A-Za-z. ñÑáéíóúÁÉÍÓÚ"]+$/',
            'sexo' => 'required|alpha|max:1',
            'universidad' => 'required|regex:/^[A-Za-z. ñÑáéíóúÁÉÍÓÚ\\-\\–\\"]+$/',
            'carrera' => 'required|regex:/^[A-Za-z. ñÑáéíóúÁÉÍÓÚ\\-\\–\\"]+$/',
            'estado' => 'required|regex:/^[A-Za-z. ñÑáéíóúÁÉÍÓÚ\\-\\–]+$/',
            'municipio' => 'required|regex:/^[A-Za-z. ñÑáéíóúÁÉÍÓÚ\\-\\–]+$/',
            'parroquia' => 'required|regex:/^[A-Za-z. ñÑáéíóúÁÉÍÓÚ\\-\\–]+$/',
            'centro' => 'required|regex:/^[A-Za-z. ñÑáéíóúÁÉÍÓÚ\\-\\–\\"]+$/',
            'sector' => 'required|regex:/^[A-Za-z. ñÑáéíóúÁÉÍÓÚ\\-\\–\\"]+$/',
            'subsector' => 'required|regex:/^[A-Za-z. ñÑáéíóúÁÉÍÓÚ\\-\\–\\"]+$/',
            'voto' => 'required|alpha|max:1',
            'telefono' => 'required|numeric|digits_between:10,11'
        ];
    }
}
