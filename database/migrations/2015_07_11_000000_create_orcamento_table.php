<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentoTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento', function (Blueprint $table) {
            $table->increments('idOrcamento');
            $table->integer('idNoivos');
            $table->integer('idBuffet');
            $table->integer('idCardapio');
            $table->date('validade');
            $table->integer('enviado');
            $table->integer('fechado');
            $table->integer('idFormaDePagamentoBuffet');
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
        Schema::drop('orcamento');
    }
}
