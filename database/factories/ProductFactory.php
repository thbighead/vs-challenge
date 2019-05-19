<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'brand' => $faker->word,
        'unit_price' => $faker->randomFloat(2, 0, 99),
        'quantity' => $faker->numberBetween(0, 999),
    ];
});
