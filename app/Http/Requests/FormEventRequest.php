<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormEventRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3|unique:events,name',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date'
        ];
    }

    public function messages ()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute precisa ter pelo menos :min caracteres',
            'after_or_equal' => 'Data de término deve ser posterior a data de início',
            'unique' => 'Já existe um evento com esse nome',
        ];
    }
}
