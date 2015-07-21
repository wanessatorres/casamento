<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormaPagamentoBuffetTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formaPagamentoBuffet', function (Blueprint $table) {
            $table->increments('idFormaDePagamento');
            $table->string('plano');
            $table->integer('parcelas');
            $table->decimal('juros');
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
        Schema::drop('formaPagamentoBuffet');
    }
}
