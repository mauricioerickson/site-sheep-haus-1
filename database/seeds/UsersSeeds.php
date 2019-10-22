<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Proprietário',
                'last_name' => 'Proprietário',
                'habits_id' => '["1","2","3","4","5","6","7","8","9","10"]',
                'function' => 'P',
                'telephone' => '+551111111111',
                'cell_phone' => '+5511111111111',
                'email' => 'proprietario@teste.com.br',
                'gender' => 'M',
                'birthday' => '11/11/1111',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Morador',
                'last_name' => 'Morador',
                'habits_id' => '["1","2","3","4","5","6","7","8","9","10"]',
                'function' => 'M',
                'telephone' => '+551111111111',
                'cell_phone' => '+5511111111111',
                'email' => 'morador@teste.com.br',
                'gender' => 'M',
                'birthday' => '11/11/1111',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Prestador',
                'last_name' => 'Serviço',
                'habits_id' => '["1","2","3","4","5","6","7","8","9","10"]',
                'function' => 'S',
                'telephone' => '+551111111111',
                'cell_phone' => '+5511111111111',
                'email' => 'prestadorserviço@teste.com.br',
                'gender' => 'M',
                'birthday' => '11/11/1111',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
