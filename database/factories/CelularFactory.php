<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Celular;
use Faker\Generator as Faker;

$factory->define(Celular::class, function (Faker $faker) {

    return [
        'idcliente' => $faker->randomDigitNotNull,
        'celular' => $faker->word
    ];
});
