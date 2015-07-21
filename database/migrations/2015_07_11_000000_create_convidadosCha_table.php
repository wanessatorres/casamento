<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvidadosChaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convidadosChaDeCozinha', function (Blueprint $table) {
            $table->increments('idConvidadosChaDeCozinha');
            $table->integer('idConvidado');
            $table->integer('entregue');
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
        Schema::drop('convidadosChaDeCozinha');
    }
}
