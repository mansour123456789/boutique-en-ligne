<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\commande;
use App\clients;
use App\products;
use Faker\Generator as Faker;

$factory->define(Commande::class, function (Faker $faker) {
    return [
        'Date_commande' => $faker->date,
        'client_id' => clients::get('id')->random(),
        'prod_id' => products::get('id')->random(),
        'created_at' => now()
    ];
});
