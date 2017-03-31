<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Carlos Diaz',
            'email' => 'carloscaad@hotmail.com',
            'password' => 'contraseña',
            'birth-date' => '1995-06-09',
            'genre' => 'Masculino',
            'avatar' => 'M',
        ]);

    }
}
