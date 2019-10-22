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
                'description' => 'Apartamento 01',
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
                'description' => 'Apartamento 02',
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
                'description' => 'Apartamento 03',
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
