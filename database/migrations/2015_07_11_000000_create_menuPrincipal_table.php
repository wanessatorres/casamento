<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuPrincipalTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuPrincipal', function (Blueprint $table) {
            $table->increments('idMenuPrincipal');
            $table->string('nomeMenuPrincipal');
            $table->string('pagina');
            $table->integer('ordem');
            $table->string('icone');
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
        Schema::drop('menuPrincipal');
    }
}
