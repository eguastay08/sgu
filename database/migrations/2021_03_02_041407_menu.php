<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements('cod_menu')->comment('Código interno del menu');
            $table->string('name')->comment('Nombre del menu');
            $table->bigInteger('order')->comment('Orden verifica el orden del menu');
            $table->string('icon')->comment('Icono del menu de font awesome. Ejem: home');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
