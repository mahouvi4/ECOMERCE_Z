<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
           
            //donne personel titulair
$table->id();
$table->string('email');
$table->string('cpf');
$table->string('ddd');
$table->string('tel');
$table->date('nacimento');
//data cartao
$table->string('firstname');
$table->string('nomecartao');
$table->string('ncredito');
$table->string('ncvv');
$table->string('mesexp');
$table->string('anoexp');
$table->string('bandeira');
$table->string('nparcela');
$table->string('totalfinal');
$table->string('totalparcela');
$table->string('totalapagar');
$table->string('statut');
//commande
$table->integer('id_list_com');
$table->integer('id_user');
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
        Schema::dropIfExists('pagamentos');
    }
}
