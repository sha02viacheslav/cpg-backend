<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorRequest extends FormRequest
{


    protected $redirectRoute = 'review';
    
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
                    'pais_id'=>'required|not_in:0',
                    'provincia_id'=> 'required_if:pais_id,1',
                    'altura' => 'required|numeric|digits_between:0,100',
                    'alturaL' => 'required|digits_between:1,2',
                    'peso' => 'min:30|max:160|required|numeric',
                    'edad'=> 'numeric|max:80|required',
                    'club'=> 'max:100',
                    'posicion_id'=> 'required',
                    'pasaporte'=> 'required',
                    'historia'=> 'max:3500',
                    'imagen'=> 'mimes:jpeg,png,jpg,gif,svg|max:10000|nullable',
                    'video'=> 'max:250',
                    'email' => 'required|unique:jugadors,email|Between:3,64|Email',
                    'terminos' => 'accepted'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'nombre'=>'required|regex:/[A-Za-z.<>\-_\s]/|min:3',
                    'pais_id'=>'required|not_in:0',
                    'provincia_id'=> 'required_if:pais_id,1',
                    'altura' => 'required|numeric|digits_between:0,100',
                    'alturaL' => 'required|digits_between:0,2',
                    'peso' => 'min:30|max:160|required|numeric',
                    'edad'=> 'numeric|max:80|required',
                    'club'=> 'max:100',
                    'posicion_id'=> 'required',
                    'pasaporte'=> 'required',
                    'historia'=> 'max:3500',
                    'imagen'=> 'mimes:jpeg,png,jpg,gif,svg|max:10000|nullable',
                    'video'=> 'max:250',
                    'email' => 'required|Between:3,64|Email|unique:jugadors,email,'. $this->id,
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
