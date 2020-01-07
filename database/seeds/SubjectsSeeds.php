<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubjectsSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'property_id' => 1,
                'from' => 2,
                'to' => 1,
                'mensagem' => 'Oi 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => 1,
                'from' => 1,
                'to' => 2,
                'mensagem' => 'Oi 1.1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => 1,
                'from' => 2,
                'to' => 1,
                'mensagem' => 'teste 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => 1,
                'from' => 1,
                'to' => 2,
                'mensagem' => 'Teste 1.1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => 1,
                'from' => 2,
                'to' => 1,
                'mensagem' => 'teste 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => 1,
                'from' => 1,
                'to' => 2,
                'mensagem' => 'Teste 2.1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => 1,
                'from' => 2,
                'to' => 1,
                'mensagem' => 'teste 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => 1,
                'from' => 1,
                'to' => 2,
                'mensagem' => 'Teste 3.1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => 1,
                'from' => 2,
                'to' => 3,
                'mensagem' => 'LALALLA',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => 1,
                'from' => 3,
                'to' => 2,
                'mensagem' => 'BABABABBA',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'property_id' => 1,
                'from' => 2,
                'to' => 1,
                'mensagem' => 'OOOOOOO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
