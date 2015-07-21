<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvidadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convidados', function (Blueprint $table) {
            $table->increments('idConvidado');
            $table->string('nomeConvidado');
            $table->integer('idFamilia');
            $table->string('facebook');
            $table->string('sexo');
            $table->string('pagante');
            $table->string('confirmado');
            $table->string('rsvp');
            $table->text('fotoConvidado');
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
        Schema::drop('convidados');
    }
}
