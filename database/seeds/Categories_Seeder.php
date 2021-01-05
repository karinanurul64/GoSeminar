<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'CategoryName' => 'University Seminar & Workshop',
            'CategoryPhoto' => 'binus.jpg'
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'CategoryName' => 'Free Seminar & Workshop',
            'CategoryPhoto' => 'free.jpg'
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'CategoryName' => 'Paid Seminar & Workshop',
            'CategoryPhoto' => 'paid.JPG'
        ]);
    }
}
