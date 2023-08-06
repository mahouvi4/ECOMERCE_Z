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
            $table->string('cod_commande');
            $table->string('adress_commande')->nullable();
            $table->string('total_commande');
            $table->string('statut');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('firstname');
            $table->string('name');
            $table->string('email');
            $table->string('cpf');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('street');
            $table->string('n_apto');
            $table->string('zipcode');
            $table->string('tel');
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
        Schema::dropIfExists('commandes');
    }
}

