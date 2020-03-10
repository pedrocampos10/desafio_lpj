<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Produtos;
use Faker\Generator as Faker;

$factory->define(Produtos::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'valor' => $faker->randomDigitNotNull,
        'descricao' => $faker->text
    ];
});
