<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_pro');
            $table->string('ref_pro');
            $table->text('description_pro');
            $table->integer('prix_pro');
            $table->integer('desconte_pro');
            $table->integer('stock');
            $table->string('statut');
            $table->string('popularite');
            $table->string('photo');
            $table->integer('id_categorie')->unsigned();
            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
