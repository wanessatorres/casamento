<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasamentoCivilTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casamentoCivil', function (Blueprint $table) {
            $table->increments('idCasamentoCivil');
            $table->date('dataCasamentoCivil');
            $table->text('localCasamentoCivil');
            $table->time('horaCasamentoCivil');
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
        Schema::drop('casamentoCivil');
    }
}
