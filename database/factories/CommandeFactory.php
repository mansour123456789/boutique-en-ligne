<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\commande;
use App\client;
use App\product;
use Faker\Generator as Faker;

$factory->define(commande::class, function (Faker $faker) {
    return [
        'Date_commande' => $faker->date,
        'client_id' => client::get('id')->random(),
        'prod_id' => product::get('id')->random(),
        'created_at' => now()
    ];
});
