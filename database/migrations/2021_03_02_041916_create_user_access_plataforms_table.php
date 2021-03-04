<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccessPlataformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_access_plataforms', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('user_agent')->comment('User Agent de la petición');
            $table->string('ip')->comment('Direccón ip de la petición');
            $table->timestamps();
            $table->string('cedula')->comment('Número de cedula del usuario');
            $table->unsignedBigInteger('cod_plataform')->comment('Código de la plataforma');
            $table->foreign('cedula')
                ->references('cedula')
                ->on('users')->cascadeOnUpdate();
            $table->foreign('cod_plataform')
                ->references('cod_plataform')
                ->on('plataforms')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_access_plataforms');
    }
}
