<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comprobante;
use Faker\Generator as Faker;

$factory->define(Comprobante::class, function (Faker $faker) {

    return [
        'descrip_cmp' => $faker->word,
        'incial' => $faker->word
    ];
});
