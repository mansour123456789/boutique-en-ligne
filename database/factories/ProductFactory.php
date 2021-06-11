<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

<<<<<<< Updated upstream

use App\product;
=======
use App\Product;
use App\Commande;
use App\Client;
>>>>>>> Stashed changes
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        
        'nom_produit'=>$faker->word,
        'description'=>$faker->word,
        'Date' => $faker->date,
        'stock_produits' =>$faker->randomDigit,
        'prix' =>$faker->randomFloat(3,0,999999),
        'choix' =>$faker->randomElement(['vetment','chemise','pontalon']),

    ];
});
