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
            $table->string('type');
            $table->unsignedBigInteger('id_user')->comment('Id del usuario que subio el archivo al sistema');
            $table->timestamps();
            $table->foreign('id_user')
                ->references('id')
                ->on('users')->cascadeOnUpdate();
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
