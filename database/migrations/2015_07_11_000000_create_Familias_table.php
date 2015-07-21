<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->increments('idFamilias');
            $table->string('nomeFamilia');
            $table->string('membroResponsavel');
            $table->string('telefone');
            $table->string('email');
            $table->text('endereco');
            $table->integer('idNoivos');
            $table->string('noivo_noiva');
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
        Schema::drop('familias');
    }
}
