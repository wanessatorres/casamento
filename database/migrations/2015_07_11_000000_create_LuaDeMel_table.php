<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuaDeMelTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luaDeMel', function (Blueprint $table) {
            $table->increments('idLuaDeMel');
            $table->text('local');
            $table->integer('receberNoticias');
            $table->integer('idNoivos');
            $table->date('dataLuaDeMel');
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
        Schema::drop('luaDeMel');
    }
}
