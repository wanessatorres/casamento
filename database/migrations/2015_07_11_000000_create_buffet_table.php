<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuffetTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buffet', function (Blueprint $table) {
            $table->increments('idBuffet');
            $table->string('nomeBuffet');
            $table->integer('capacidadePessoas');
            $table->text('endereco');
            $table->string('telefone');
            $table->string('email');
            $table->string('site');
            $table->integer('idLogin');
            $table->integer('cerimonia');
            $table->integer('festa');
            $table->date('dataValidade');
            
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
        Schema::drop('buffet');
    }
}
