<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusquedaRequest extends FormRequest
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
            'nombre'=>'required|regex:/[A-Za-z.<>\-_\s]/|min:3',
            'email' => 'required|Between:3,64|Email',
            'pregunta' => 'required',
            'cv'=> 'mimes:jpeg,png,jpg,doc,docx,pdf,txt|max:10000|nullable',
        ];
    }
}
