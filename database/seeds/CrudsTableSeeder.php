<?php
use Illuminate\Database\Seeder;
//Usar el model Crud en este seeder
use App\Crud;

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
