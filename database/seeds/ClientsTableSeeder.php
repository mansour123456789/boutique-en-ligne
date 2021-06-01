<?php

use Illuminate\Database\Seeder;
use App\clients;
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
        factory(App\clients::class, 10)->create();
    }
}
