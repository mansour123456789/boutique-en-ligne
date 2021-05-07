<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\products;
use Faker\Generator as Faker;

$factory->define(products::class, function (Faker $faker) {
    return [
        
        'nom_produit'=>$faker->word,
        'description'=>$faker->word,
        'Date' => $faker->date,
        'stock_produits' =>$faker->randomDigit,
        'prix' =>$faker->randomFloat(3,0,999999),
        'choix' =>$faker->randomElement(['vetment','chemise','pontalon']),

        'created_at' => now()
    ];
});