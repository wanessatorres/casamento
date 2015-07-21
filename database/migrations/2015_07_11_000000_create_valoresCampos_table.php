<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoresCamposTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoresCampos', function (Blueprint $table) {
            $table->increments('idValoresCampos');
            $table->integer('idCamposTipo');
            $table->string('texto');
            $table->integer('numero');
            $table->text('foto');
            $table->string('select');
            $table->float('numeroFloat');
            $table->text('textoLongo');
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
        Schema::drop('valoresCampos');
    }
}
