<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Crud::class, function (Faker\Generator $faker) {

    return [
          'cedula' => $faker->unique()->numberBetween($min = 3000000, $max = 29000000),
          'apellidos' => $faker->lastName,
          'nombres' => $faker->name,
          'sexo' => $faker->randomElement($array = array ('M','F')),
          'universidad' => $faker->company,
          'carrera' => $faker->jobTitle,
          'estado' => $faker->state,
          'municipio' => $faker->city,
          'parroquia' => $faker->city,
          'centro' => $faker->city,
          'sector' => $faker->city,
          'subsector' => $faker->city,
          'voto' => $faker->randomElement($array = array ('S','N')),
          'telefono' => $faker->phoneNumber,
    ];
});