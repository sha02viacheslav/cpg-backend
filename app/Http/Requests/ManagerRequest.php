<?php

namespace App\Http\Requests;

use App\Manager;
use Illuminate\Foundation\Http\FormRequest;

class ManagerRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = isset($this->manager) ? $this->manager->id : null;

        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'nombre'=>'required|regex:/[A-Za-z.<>\-_\s]/|min:3',
                    'email' => 'required|unique:managers,email|Between:3,64|Email',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                ];
            }
            default:break;
        }

    }

    public function messages()
    {
        return [
            'terminos.accepted'  => 'Los terminos deben ser aceptados.',
            'peso.min'  => 'Debes pesar al menos 30kgs.',
            'peso.max'  => 'No podes pesar más de 160kg para ser un jugador profesional.',
            'edad.max'  => 'No podes tener más de 80 años para ser un jugador profesional.',
            'provincia_id.required_if'  => 'La Provincia es obligatoria cuando el Pais es Argentina.',
            'posicion_id.required'  => 'Por favor selecciona la posición en la que jugas.',
            'pasaporte.required'  => 'Por favor informános si dispones de pasaporte para poder viajar al exterior.',
        ];
    }
}
