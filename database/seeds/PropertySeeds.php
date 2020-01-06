<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropertySeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            [
                'type' => 'A',
                'name' => 'Imóvel 01',
                'description' => 'O bairro proporciona a seus moradores praticidade, tranquilidade, além de uma ótima vista. Está próximo de avenidas que contribuem para o fácil acesso as demais regiões da cidade e ao estádio Doutor Jayme Cintra.',
                'characteristics_id' => '["1","2","3","4","5","6","7","8","9","10","11","12"]',
                'number_of_bedrooms' => '2',
                'number_of_bathrooms' => '1',
                'number_of_residents' => '2',
                'property_size' => '56',
                'address' => 'Rua Clara Fáber - Vila Cristo Redentor, Jundiaí - State of São Paulo, Brazil',
                'cep' => '13203-170',
                'district' => 'Vila Crisrto',
                'city' => 'Jundiaí',
                'state' => 'SP',
                'number' => '146',
                'country' => 'Brazil',
                'lat' => '-23.2068364',
                'lng' => '-46.849555099999975',
                'user_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'A',
                'name' => 'Imóvel 02',
                'description' => 'O Belvedere Residencial está localizado em um bairro de fácil acesso e próximo à Campinas. Perto do residencial você pode encontrar um centro comercial com tudo o que você precisa (bancos, escolas, hospital, mercados, lojas, posto de gasolina, etc). Tudo isso pertinho de Campinas mas com IPTU de valores mais baixos.',
                'characteristics_id' => '["1","2","3","4","5","6","7","8","9","10","11","12"]',
                'number_of_bedrooms' => '2',
                'number_of_bathrooms' => '1',
                'number_of_residents' => '2',
                'property_size' => '56',
                'address' => 'Rua Clara Fáber - Vila Cristo Redentor, Jundiaí - State of São Paulo, Brazil',
                'cep' => '13203-170',
                'district' => 'Vila Crisrto',
                'city' => 'Jundiaí',
                'state' => 'SP',
                'number' => '146',
                'country' => 'Brazil',
                'lat' => '-23.2068364',
                'lng' => '-46.849555099999975',
                'user_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'A',
                'name' => 'Imóvel 03',
                'description' => 'Região de alta valorização e estratégica: Próximo a shoppings, supermercados, colégios e tudo o que você precisa para garantir a praticidade do dia a dia. Fácil acesso a região central e diversas localidades da cidade.',
                'characteristics_id' => '["1","2","3","4","5","6","7","8","9","10","11","12"]',
                'number_of_bedrooms' => '2',
                'number_of_bathrooms' => '1',
                'number_of_residents' => '2',
                'property_size' => '56',
                'address' => 'Rua Clara Fáber - Vila Cristo Redentor, Jundiaí - State of São Paulo, Brazil',
                'cep' => '13203-170',
                'district' => 'Vila Crisrto',
                'city' => 'Jundiaí',
                'state' => 'SP',
                'number' => '146',
                'country' => 'Brazil',
                'lat' => '-23.2068364',
                'lng' => '-46.849555099999975',
                'user_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
