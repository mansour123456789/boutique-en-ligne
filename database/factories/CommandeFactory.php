<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\commande;
use Faker\Generator as Faker;

$factory->define(commande::class, function (Faker $faker) {
    return [
        'Date_commande' => $faker->date,
        'client_id' => Client::get('id')->random(),
        'prod_id' => products::get('id')->random(),
        'created_at' => now()
    ];
});
