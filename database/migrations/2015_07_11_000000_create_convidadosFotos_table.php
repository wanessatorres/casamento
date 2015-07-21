<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvidadosFotosTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convidadosFotos', function (Blueprint $table) {
            $table->increments('idConvidadosFotos');
            $table->text('descricaoFoto');
            $table->text('caminhoFoto');
            $table->string('nomeFoto');
            $table->integer('idNoivos');
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
        Schema::drop('convidadosFotos');
    }
}
