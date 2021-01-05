<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Venta;
use Faker\Generator as Faker;

$factory->define(Venta::class, function (Faker $faker) {

    return [
        'idcomprobante' => $faker->randomDigitNotNull,
        'numero' => $faker->word,
        'idcliente' => $faker->randomDigitNotNull,
        'sub_tot' => $faker->word,
        'igv_tot' => $faker->word,
        'tot_tot' => $faker->word,
        'observacion' => $faker->word
    ];
});
