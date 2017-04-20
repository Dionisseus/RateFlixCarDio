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
            'image' => 'images/banner.jpg',
            'genre' => 'Ciencia-Ficcion',
            'actor' => 'Matthew McConaughey Anne Hathaway Jessica Chastain Bill Irwin Ellen Burstyn Michael Caine',
            'sinopsis' => 'text',
            'duration' => '160',

        ]);

        DB::table('movies')->insert([
            'name' => 'Batman: The Dark Knight',
            'image' => 'images/batman.jpg',
            'genre' => 'Ciencia-Ficcion',
            'actor' => 'Christian Bale Heath Ledger Morgan Freeman Michael Caine',
            'sinopsis' => 'text',
            'duration' => '180',

        ]);
    }
}
