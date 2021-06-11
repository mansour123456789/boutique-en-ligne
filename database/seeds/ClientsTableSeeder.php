<?php

use Illuminate\Database\Seeder;
use App\client;
class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\client::class, 10)->create();
    }
}
