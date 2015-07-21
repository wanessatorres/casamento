<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentesChaCozinhaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentesChaCozinha', function (Blueprint $table) {
            $table->increments('idPresenteChaCozinha');
            $table->string('nomePresenteCha');
            $table->integer('idChaDeCozinha');
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
        Schema::drop('presentesChaCozinha');
    }
}
