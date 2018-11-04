<?php
 
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence,
        'detail' => $faker->text,
    ];
});