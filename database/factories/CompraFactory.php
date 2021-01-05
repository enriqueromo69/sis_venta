<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Compra;
use Faker\Generator as Faker;

$factory->define(Compra::class, function (Faker $faker) {

    return [
        'idcomprobante' => $faker->randomDigitNotNull,
        'numero' => $faker->word,
        'idproveedor' => $faker->randomDigitNotNull,
        'sub_tot' => $faker->word,
        'igv_tot' => $faker->word,
        'tot_tot' => $faker->word,
        'observacion' => $faker->word
    ];
});
