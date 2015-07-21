<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcoesEnqueteTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcoesEnquetes', function (Blueprint $table) {
            $table->increments('idOpcoesEnquete');
            $table->string('valorOpcao');
            $table->integer('quantidade');
            $table->integer('idEnquete');
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
        Schema::drop('opcoesEnquetes');
    }
}
