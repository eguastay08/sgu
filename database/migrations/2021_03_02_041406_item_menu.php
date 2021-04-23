<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_menu', function (Blueprint $table) {
            $table->bigIncrements('cod_item_menu')->comment('Código interno del item menu');
            $table->string('name')->comment('Nombre del item menu');
            $table->string('uri')->comment('uri del enlace en el fronent');
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
