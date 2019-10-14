<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'habits_id' => 'required',
            'function' => 'required',
            'gender' => 'required',
            'cell_phone' => 'required|numeric',
            'birthday' => 'required|date'
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
            'habits_id.required' => 'Selecione os seus hábitos.',
            'function.required' => 'Selecione a sua ocupação.',
            'gender.required' => 'Selecione o seu gênero.',
            'birthday.required' => 'Preencha a sua data de nascimento, por exemplo "01/01/1994".',
            'cell_phone.numeric' => 'O campo celular deve ser peenchido apenas com números, por exemplo "+55 11 252125211.',
        ];
    }
}