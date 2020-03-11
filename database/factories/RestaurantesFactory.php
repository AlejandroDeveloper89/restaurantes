<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurante;
use Faker\Generator as Faker;

$factory->define(Restaurante::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstNameMale,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'horario' => '12:00 - 23:00'
    ];
});
