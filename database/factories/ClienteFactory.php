<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {

    return [
        'razon_social' => $faker->word,
        'idtipodoc' => $faker->randomDigitNotNull,
        'documento' => $faker->word,
        'correo' => $faker->word
    ];
});
