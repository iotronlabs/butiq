<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $name=$faker-> unique()->name,
        'slug' => str_slug($name),
        'description' => $faker->sentence(10),
        'price' => 1000,
    ];
});
