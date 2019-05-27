<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorStep1Request extends FormRequest
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
        return [
            'nombre'=>'required|regex:/[A-Za-z.<>\-_\s]/|min:3',
            'edad'=> 'numeric|max:80|required',
            'historia'=> 'max:3500',
            'terminos' => 'accepted'
        ];
    }

    public function messages()
    {
        return [
            'terminos.accepted'  => 'Los términos y condiciones deben ser aceptados.',
            'pasaporte.required'  => 'Por favor informános si dispones de pasaporte para poder viajar al exterior.',
        ];
    }
}
