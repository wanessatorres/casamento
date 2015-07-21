<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvidadosCortejoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convidadosCortejo', function (Blueprint $table) {
            $table->increments('idConvidadoCortejo');
            $table->integer('idConvidado');
            $table->integer('ordem');
            $table->integer('idTipoConvidado');
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
        Schema::drop('convidadosCortejo');
    }
}
