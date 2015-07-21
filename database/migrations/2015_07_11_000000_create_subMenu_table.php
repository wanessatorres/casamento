<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMenuTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subMenu', function (Blueprint $table) {
            $table->increments('idSubMenu');
            $table->string('nomeSubMenu');
            $table->string('paginaSubMenu');
            $table->integer('idMenuPrincipal');
            $table->integer('ordem');
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
        Schema::drop('subMenu');
    }
}
