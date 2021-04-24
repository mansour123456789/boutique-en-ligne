<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('prenom',50);
            $table->string('email')->unique();
            $table->string('password',50);
          $table->Integer('prod_id')->unsigned();
         //  $table->rememberToken();
          //$table->timestamps();
          $table->foreign('prod_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
