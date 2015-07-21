<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoivosTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noivos', function (Blueprint $table) {
            $table->increments('idNoivos');
            $table->string('nomeNoiva');
            $table->string('nomeNoivo');
            $table->integer('idCasamentoCivil');
            $table->integer('idCasamentoReligioso');
            $table->integer('idChaDeCozinha');
            $table->integer('idLuaDeMel');
            $table->integer('idPlano');
            $table->string('cor');
            
            $table->text('fotoNoiva');
            $table->text('fotoNoivo');
            $table->text('fotoCasal');
            $table->integer('idBuffet');
            $table->integer('ativo');
            $table->string('hashtag');
            $table->string('facebookPagina');
            $table->date('validadePlano');
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
        Schema::drop('noivos');
    }
}
