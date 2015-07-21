<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentesxConvidadosChaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentesxconvidadoscha', function (Blueprint $table) {
            $table->increments('idPresentesxConvidadosCha');
            $table->integer('idConvidadoChaDeCozinha');
            $table->integer('idPresenteChaCozinha');
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
        Schema::drop('presentesxconvidadoscha');
    }
}
