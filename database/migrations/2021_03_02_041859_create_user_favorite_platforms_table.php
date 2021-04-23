<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFavoritePlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_favorite_platforms', function (Blueprint $table) {
            $table->unsignedInteger('orden')->comment('Orden de las plataformas favoritas del usuario');
            $table->timestamps();
            $table->unsignedBigInteger('id_user')->comment('Identificador del usuario');
            $table->unsignedBigInteger('cod_platform')->comment('Código de la plataforma');
            $table->primary(['id_user','cod_platform']);
            $table->foreign('id_user')
                ->references('id')
                ->on('users')->cascadeOnUpdate();

            $table->foreign('cod_platform')
                ->references('cod_platform')
                ->on('platforms')->cascadeOnUpdate();
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
