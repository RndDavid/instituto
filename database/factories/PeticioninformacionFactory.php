<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peticioninformacion;
use Faker\Generator as Faker;

$factory->define(Peticioninformacion::class, function (Faker $faker) {
    return [
        'tutorGrupo' => $faker->unique()->numberBetween($min=1,$max=100),
        'alumno' => $faker->unique()->numberBetween($min=101,$max=300),
        'observaciones' => $faker->text($maxNbChars = 200)
    ];
});
