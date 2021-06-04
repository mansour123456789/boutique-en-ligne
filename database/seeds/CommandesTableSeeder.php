<?php

use Illuminate\Database\Seeder;
use App\commande;
class CommandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\commande::class, 10)->create();
    }
}