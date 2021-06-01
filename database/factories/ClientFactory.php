<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\clients;
use Faker\Generator as Faker;

$factory->define(clients::class, function (Faker $faker) {
    return [
        'name' => $faker->lastName,
        'prenom' => $faker->firstName,
        'email' => $faker->freeEmail,
        'password' => $faker->lastName,
        'tel' => $faker->lastName        
    ];
});
