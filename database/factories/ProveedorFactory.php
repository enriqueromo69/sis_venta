<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {

    return [
        'razon_social' => $faker->word,
        'idtipodoc' => $faker->randomDigitNotNull,
        'documento' => $faker->word,
        'correo' => $faker->word,
        'observacion' => $faker->word
    ];
});
