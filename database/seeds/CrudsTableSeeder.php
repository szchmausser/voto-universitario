<?php

use Illuminate\Database\Seeder;
use App\Crud; //Usar el model Crud en este seeder

class CrudsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Crud::class, 100)->create();
    }
}
