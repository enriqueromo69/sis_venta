<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ventadetalle;
use Faker\Generator as Faker;

$factory->define(Ventadetalle::class, function (Faker $faker) {

    return [
        'idventa' => $faker->randomDigitNotNull,
        'idproducto' => $faker->randomDigitNotNull,
        'cantidad' => $faker->randomDigitNotNull,
        'prec_unit' => $faker->word,
        'tot_tot' => $faker->word,
        'observacion' => $faker->word
    ];
});
