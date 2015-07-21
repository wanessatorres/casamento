<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaDeCozinhaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChaDeCozinha', function (Blueprint $table) {
            $table->increments('idChaDeCozinha');
            $table->date('dataChaDeCozinha');
            $table->string('localChaDeCozinha');
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
        Schema::drop('chaDeCozinha');
    }
}
