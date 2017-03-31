<?php

use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // $this->call(UsersTableSeeder::class);
        DB::table('movies')->insert([
            'name' => 'Interestellar',
            'image' => 'imagen',
            'genre' => 'Ciencia-Ficcion',
            'actor' => 'Matthew McConaughey Anne Hathaway Jessica Chastain Bill Irwin Ellen Burstyn Michael Caine',
            'sinopsis' => 'text',
            'duration' => '160',
            'rate' => '85',
        ]);

        DB::table('movies')->insert([
            'name' => 'Interestellar',
            'image' => 'imagen',
            'genre' => 'Ciencia-Ficcion',
            'actor' => 'Matthew McConaughey Anne Hathaway Jessica Chastain Bill Irwin Ellen Burstyn Michael Caine',
            'sinopsis' => 'text',
            'duration' => '160',
            'rate' => '85',
        ]);
    }
}
