<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
<<<<<<< Updated upstream:database/seeds/ProductsTableSeeder.php
        factory(App\product::class, 10)->create();

=======
        factory(Product::class, 10)->create();
>>>>>>> Stashed changes:database/seeds/ProductTableSeeder.php
    }
}
