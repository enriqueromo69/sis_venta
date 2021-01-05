<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tipo_clie;
use Faker\Generator as Faker;

$factory->define(Tipo_clie::class, function (Faker $faker) {

    return [
        'descrip_doc' => $faker->word,
        'caracteres' => $faker->word
    ];
});
