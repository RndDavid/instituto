<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Respuestaprofesor;
use Faker\Generator as Faker;

$factory->define(Respuestaprofesor::class, function (Faker $faker) {
    return [
        'profesor' => $faker->unique()->randomNumber,
        'peticionesinformacion_id' => $faker->unique()->randomNumber,
        'comportamiento' => $faker->randomDigitNotNull,
        'nivelacademico' => $faker->randomDigitNotNull,
        'observaciones' => $faker->text(200),

    ];
});
