<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Data' => 'required',
            'Local' => 'required|min:2',  
            'Cidade' => 'required',  
            'Formato' => 'required',
            'Cachê' => 'required',
        ];
        
    }

    public function messages()
    {
        return [
            'required' => 'Campo :attribute é obrigatório',
            'min' => 'Campo deve ter o mínimo de :min caracteres',

        ];
    }
}
