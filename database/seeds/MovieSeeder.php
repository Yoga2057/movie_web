<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie')->insert([
                'imDB' => '111555',
                'title' => 'kuyang',
                'year' => '2024',
                'genre' => 'horor',
                'poster'=> 'kuyang.png'
            ]);
    }
}
