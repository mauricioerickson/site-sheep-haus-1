<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProperty extends FormRequest
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
            'name' => 'required', 
            'description' => 'required', 
            'type' => 'required', 
            'characteristics_id' => 'required', 
            'number_of_bedrooms' => 'required|numeric', 
            'number_of_bathrooms' => 'required|numeric', 
            'number_of_residents' => 'required|numeric', 
            'property_size' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Preencha um nome para o seu imóvel.',
            'description.required' => 'É necessário colocar uma pequena descrição sobre o imóvel.',
            'type.required' => 'Escolha o tipo do seu imóvel.',
            'characteristics_id.required' => 'Selecione ao menos uma característica do seu imóvel.',
            'number_of_bedrooms.required' => 'Preencha o número de quartos do seu imóvel.',
            'number_of_bathrooms.required' => 'Preencha o número de banheiros do seu imóvel.',
            'number_of_residents.required' => 'Preencha o número de moradores do seu imóvel.',
            'number_of_bedrooms.numeric' => 'Preencha apenas com números por favor.',
            'number_of_bathrooms.numeric' => 'Preencha apenas com números por favor.',
            'number_of_residents.numeric' => 'Preencha apenas com números por favor.',
            'property_size.required' => 'Preencha o tamanho do seu imóvel.',
        ];
    }
}
