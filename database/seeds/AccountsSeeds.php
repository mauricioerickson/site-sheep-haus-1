<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AccountsSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'property_id' => '1',
                'name' => 'Agua',
                'value' => '78,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '1',
                'name' => 'Luz',
                'value' => '349,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '1',
                'name' => 'TV',
                'value' => '250,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '1',
                'name' => 'Internet',
                'value' => '200,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '2',
                'name' => 'Agua',
                'value' => '78,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '2',
                'name' => 'Luz',
                'value' => '349,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '2',
                'name' => 'TV',
                'value' => '250,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '2',
                'name' => 'Internet',
                'value' => '200,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '3',
                'name' => 'Agua',
                'value' => '78,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '3',
                'name' => 'Luz',
                'value' => '349,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '3',
                'name' => 'TV',
                'value' => '250,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => '3',
                'name' => 'Internet',
                'value' => '200,00',
                'duedate' => '05/10/2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
