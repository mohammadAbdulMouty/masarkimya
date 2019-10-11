<?php

use Faker\Generator as Faker;
use App\Product;
$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'file_Name'=>$faker->name
    ];
});
