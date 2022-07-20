<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string|max:50|min:3',
            'email' => 'required|email',
            'tel' => 'required',
            'messageClient' =>'required|max:2000|min:10',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo :attribute é obrigatório',
            'string' => 'Campo :attribute precisa contar letras',
            'max' => 'Campo deve ter o maximo de :max caracteres',
            'min' => 'Campo deve ter o mínimo de :min caracteres',
            'email' => 'Campo e-mail inválido. Tente novamente',
        ];
    }
}
