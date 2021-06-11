<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< Updated upstream


        $this->call(ClientsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CommandesTableSeeder::class);



=======
        $this->call(ProductsTableSeeder::class);
>>>>>>> Stashed changes
      }

}
