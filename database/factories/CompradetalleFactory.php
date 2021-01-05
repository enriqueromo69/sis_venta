<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Compradetalle;
use Faker\Generator as Faker;

$factory->define(Compradetalle::class, function (Faker $faker) {

    return [
        'idcompra' => $faker->randomDigitNotNull,
        'idproducto' => $faker->randomDigitNotNull,
        'idproveedor' => $faker->randomDigitNotNull,
        'cantidad' => $faker->randomDigitNotNull,
        'prec_unit' => $faker->word,
        'tot_tot' => $faker->word,
        'observacion' => $faker->word
    ];
});
