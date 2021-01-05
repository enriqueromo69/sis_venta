<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'marca' => $faker->word,
        'modelo' => $faker->word,
        'cantidad' => $faker->randomDigitNotNull,
        'precio' => $faker->word
    ];
});
