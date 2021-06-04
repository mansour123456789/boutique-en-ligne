<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date_commande');
            $table->Integer('prod_id')->unsigned();
            $table->Integer('client_id')->unsigned();
            $table->timestamps();
            
            
            // $table->foreignId('client_id')->constrained('clients');
            // $table->foreignId('prod_id')->constrained('produits');
            
        });
        // Schema::create('commandes', function (Blueprint $table) {
        //     $table->foreign('prod_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict');
        //     $table->foreign('client_id')->references('id')->on('clients')->onDelete('restrict')->onUpdate('restrict');
            
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
