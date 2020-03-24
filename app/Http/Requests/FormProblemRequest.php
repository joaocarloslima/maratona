<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormProblemRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'description' => 'required|min:10',
            'text' => 'required',
            'event_id' => 'required',
        ];
    }

    public function messages ()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute precisa ter pelo menos :min caracteres'
        ];
    }
}
