<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
         'name' => $faker->name,
         'price' => $faker->numberBetween($min = 1500, $max = 6000),
        
    ];
});
