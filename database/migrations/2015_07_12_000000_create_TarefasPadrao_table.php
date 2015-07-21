<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasPadraoTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefasPadrao', function (Blueprint $table) {
            $table->increments('idTarefasPadrao');
            $table->string("titulo");
            $table->string("descricao");
            $table->integer("diasAntes");
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
        Schema::drop('tarefasPadrao');
    }
}
