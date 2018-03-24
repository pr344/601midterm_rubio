<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement('Ford','Honda','Toyota'),
        'Model' => $faker->randomElement('Coupe','Sedan','SUV','Pickup'),
        'Year' => $faker->numberBetween(1980,2018),
    ];
});
