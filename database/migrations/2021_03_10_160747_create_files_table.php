<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id_file')->comment('Identificador del archivo');
            $table->string('path')->comment('Ruta local donde se encuentra el archivo');
            $table->string('name',100)->comment("nombre del archivo");
            $table->string('extension',5)->comment('Extension del archivo');
            $table->enum('type',['avatar_user','avatar_plataform']);
            $table->bigInteger('cod_plataform')->nullable()->comment('Id de la plataforma a la que pertenese el archivo');
            $table->bigInteger('cedula')->comment('Cedula del usuario que subio el archivo a la plataforma');
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
        Schema::dropIfExists('files');
    }
}
