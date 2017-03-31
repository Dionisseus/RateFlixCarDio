<?php

use Illuminate\Database\Seeder;

class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rates')->insert([
            'idUser' => '1',
            'idMovie' => '1',
            'thumbsUp' => '85',

        ]);

        DB::table('rates')->insert([
            'idUser' => '2',
            'idMovie' => '2',
            'thumbsUp' => '92',

        ]);


    }
}
