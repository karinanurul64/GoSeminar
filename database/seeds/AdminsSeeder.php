<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'admin A',
            'email'=>'adminA@goseminar.com',
            'job_title'=>'Admin',
            'password'=>Hash::make('password'),
        ]);
    }
}
