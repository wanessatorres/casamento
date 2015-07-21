<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotosNoivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votosNoivos', function (Blueprint $table) {
            $table->increments('idVotosNoivos');
            $table->integer('idLogin');
            $table->integer('idLoginPara');
            $table->integer('idNoivos');
            $table->date('dataDisparo');
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
        Schema::drop('votosNoivos');
    }
}
