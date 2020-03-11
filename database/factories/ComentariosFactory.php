<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentario;
use Faker\Generator as Faker;

$factory->define(Comentario::class, function (Faker $faker) {
    return [
        'comentario' => $faker->text(),
        'estrella' => rand(1, 5),
        'user_id' => rand(2, 3),
        'restaurante_id' => rand(1, 7),
        'aprovado' => 1
    ];
});
