<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvidadosxMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convidadosxmesas', function (Blueprint $table) {
            $table->increments('idConvidadosxmesa');
            $table->integer('idMesa');
            $table->integer('idConvidado');
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
        Schema::drop('convidadosxmesas');
    }
}
