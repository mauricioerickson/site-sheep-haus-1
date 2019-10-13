<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistration extends FormRequest
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
            'university_id' => 'required|max:255|exists:colleges,name',
            'course_id' => 'required|max:255|exists:courses,name',
            'cell_phone' => 'required|min:11|numeric'
        ];
    }
    public function messages()
    {
        return [
            'course_id.required' => 'É necessário preencher o campo "Curso".',
            'university_id.required' => 'É necessário preencher o campo "Universidade".',
            'cell_phone.required' => 'É necessário preencher o campo "Celular".',
            'university_id.exists' => 'A universidade preenchida é inválida.',
            'course_id.exists' => 'O curso preenchido é inválido.',
            'cell_phone.min' => 'Preencha o número com o DDD de sua cidade, por exemplo "11 252125211".',
            'cell_phone.numeric' => 'O campo celular deve ser peenchido apenas com números.',
        ];
    }
}