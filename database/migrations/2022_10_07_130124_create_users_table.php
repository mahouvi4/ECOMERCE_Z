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
  $table->string('firstname')->nullable();
  $table->string('name');
  $table->string('email')->unique();
  $table->timestamp('email_verified_at')->nullable();
  $table->string('password');
  $table->string('country')->nullable();
  $table->string('state')->nullable();
  $table->string('city')->nullable();
  $table->string('street')->nullable();
  $table->string('n_apto')->nullable();
  $table->integer('zipcode')->nullable();
  $table->integer('tel')->nullable();
  $table->string('profile');
  $table->string('statut');
  $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
