<?php

//https://stackoverflow.com/questions/34382043/laravel-how-do-i-insert-the-first-user-in-the-database

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Vioscar Rivero',
            'email' => 'szchmausser@gmail.com',
            'password' => bcrypt('17201169'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Jose Brito',
            'email' => 'jose.brito.fundacite@gmail.com',
            'password' => bcrypt('josebrito'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Usuario Supervisor',
            'email' => 'supervisor@ejemplo.tld',
            'password' => bcrypt('supervisor'),
            'role' => 'supervisor',
        ]);
        DB::table('users')->insert([
            'name' => 'Usuario Editor',
            'email' => 'editor@ejemplo.tld',
            'password' => bcrypt('editor'),
            'role' => 'editor',
        ]);
        DB::table('users')->insert([
            'name' => 'Usuario Visitante',
            'email' => 'visitante@ejemplo.tld',
            'password' => bcrypt('visitante'),
            'role' => '',
        ]);
    }
}
