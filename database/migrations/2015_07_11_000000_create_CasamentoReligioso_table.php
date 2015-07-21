<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasamentoReligiosoTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casamentoReligioso', function (Blueprint $table) {
            $table->increments('idCasamentoReligioso');
            $table->date('dataCasamentoReligioso');
            $table->text('localCasamentoReligioso');
            $table->time('horaCasamentoReligioso');
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
        Schema::drop('casamentoReligioso');
    }
}
