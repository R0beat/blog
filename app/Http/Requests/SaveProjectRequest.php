<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()//Validamos si el usuario tiene permisos
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()//Aplicamos reglas de validación
    {
        return [
	'title' => 'required',
	'url' => 'required',
	'description' => 'required',
        ];
    }

    public function messages(){
      return [
	'title.required' => 'El proyecto necesita un titulo',
	'url.required' => 'El proyeto necesita una url',
	'description.required' => 'El proyecto necesita una descripción'
      ];
    }
}
