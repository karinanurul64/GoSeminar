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
        $this->call(SeminarsSeeder::class);
        $this->call(Categories_Seeder::class);
        $this->call(AdminsSeeder::class);
    }
}
