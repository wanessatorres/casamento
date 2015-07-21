<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefoneNoivosTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefoneNoivos', function (Blueprint $table) {
            $table->increments('idTelefonesNoivos');
            $table->integer('idNoivos');
            $table->string('nomeTelefone');
            $table->string('numeroTelefone');
            $table->integer('idTipoTelefone');
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
        Schema::drop('telefoneNoivos');
    }
}
