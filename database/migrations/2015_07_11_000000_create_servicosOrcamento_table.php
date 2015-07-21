<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateservicosOrcamentoTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicosOrcamento', function (Blueprint $table) {
            $table->increments('idServicosOrcamento');
            $table->integer('idOrcamento');
            $table->integer('idServico');
            $table->integer('quantidade');
            $table->decimal('valorFinal');
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
        Schema::drop('servicosOrcamento');
    }
}
