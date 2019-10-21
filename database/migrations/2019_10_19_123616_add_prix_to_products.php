<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrixToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
          $table->integer('categorie_id')->unsigned();
          $table->foreign('categorie_id')->references('id')->on('categories')
            ->onDelete('cascade');

          $table->integer('vente_id')->unsigned();
          $table->foreign('vente_id')->references('id')->on('ventes')
              ->onDelete('cascade');

         $table->decimal('prixVente', 15, 2)->nullable();
         $table->decimal('prixAchat', 15, 2)->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
}
