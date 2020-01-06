<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HabitsSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(CollegesSeeder::class);
        $this->call(CharacteristicsSeeder::class);
        $this->call(UsersSeeds::class);
        $this->call(PropertySeeds::class);
        $this->call(GalleriesSeeds::class);
        $this->call(AccountsSeeds::class);
        $this->call(IHabitsSeeds::class);
        $this->call(MHabitsSeeds::class);
    }
}
