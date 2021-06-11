<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\client;
use Faker\Generator as Faker;

$factory->define(client::class, function (Faker $faker) {
    return [
        'name' => $faker->lastName,
        'prenom' => $faker->firstName,
        'email' => $faker->freeEmail,
        'password' => $faker->lastName,
        'tel' => $faker->lastName        
    ];
});
