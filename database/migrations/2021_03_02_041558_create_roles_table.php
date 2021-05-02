<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('cod_rol')->comment('Código del rol');
            $table->string('name')->unique()->comment('Nombre del rol');
            $table->text('detail')->nullable()->comment('Detalle del rol');
            $table->string('domain')->comment('Dominio al que pertenezeran los correos generados');
            $table->string('group_email')->nullable('Grupo al que pertenecen en GSUITE');
            $table->string('path_unit')->nullable()->comment('Ruta donde se encuntra la Unidad Organizativa en GSUITE');
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
        Schema::dropIfExists('roles');
    }
}
