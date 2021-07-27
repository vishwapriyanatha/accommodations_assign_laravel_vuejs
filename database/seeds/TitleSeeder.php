<?php

use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('titles')->insert([

            [
                'name' => 'Mr'
            ],
            [
                'name' => 'Mrs'
            ],
            [
                'name' => 'Miss'
            ],
            [
                'name' => 'Ms'
            ],
            [
                'name' => 'Rev'
            ]

        ]);
    }
}
