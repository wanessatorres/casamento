<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefa', function (Blueprint $table) {
            $table->increments('idTarefa');
            $table->integer('idLogin');
            $table->string('titulo');
            $table->string('descricao');
            $table->integer('idNoivos');
            $table->date('dataFim');
            $table->integer('concluido');
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
        Schema::drop('tarefa');
    }
}
