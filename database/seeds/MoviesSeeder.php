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
            'sinopsis' => 'Batman/Bruce Wayne (Christian Bale) regresa para continuar su guerra contra el crimen.
                          Con la ayuda del teniente Jim Gordon (Gary Oldman) y del Fiscal del Distrito Harvey Dent (Aaron Eckhart),
                          Batman se propone destruir el crimen organizado en la ciudad de Gotham. El triunvirato demuestra su eficacia,
                           pero, de repente, aparece Joker (Heath Ledger), un nuevo criminal que desencadena el caos y
                           tiene aterrados a los ciudadanos.',
            'duration' => '180',

        ]);

        DB::table('movies')->insert([
            'name' => 'Deadpool',
            'image' => 'images/deadpool.jpg',
            'genre' => 'Ciencia-Ficcion',
            'actor' => 'Ryan Reynolds, Morena Baccarin, Ed Skrein, Gina Carano, T.J. Miller,
             Rachel Sheen, Brianna Hildebrand, Paul Lazenby, Sean Quan, Ben Wilkinson, Karan Soni,
              Naika Toussaint, Olesia Shewchuk, Kyle Cassie, Style Dayne, Fabiola Colmenero, Stan Lee',
            'sinopsis' => 'Basado en el anti-héroe menos convencional de la Marvel,
             Deadpool narra el origen de un ex-operativo de la fuerzas especiales llamado Wade Wilson,
              reconvertido a mercenario, y que tras ser sometido a un cruel experimento adquiere poderes de curación rápida,
               adoptando Wade entonces el alter ego de Deadpool.
             Armado con sus nuevas habilidades y un oscuro y retorcido sentido del humor,
              Deadpool intentará dar caza al hombre que casi destruye su vida.',
            'duration' => '106',

        ]);
    }
}
