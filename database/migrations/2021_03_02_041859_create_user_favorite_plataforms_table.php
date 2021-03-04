<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFavoritePlataformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_favorite_plataforms', function (Blueprint $table) {
            $table->unsignedInteger('orden')->comment('Orden de las plataformas favoritas del usuario');
            $table->timestamps();
            $table->string('cedula','10')->comment('Número de cedula del usuario');
            $table->unsignedBigInteger('cod_plataform')->comment('Código de la plataforma');
            $table->primary(['cedula','cod_plataform']);
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
        Schema::dropIfExists('user_favorite_plataforms');
    }
}
