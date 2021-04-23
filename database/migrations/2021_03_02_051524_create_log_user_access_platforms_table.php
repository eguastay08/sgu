<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogUserAccessPlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_user_access_platforms', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('user_agent')->comment('User Agent de la petición');
            $table->string('ip')->comment('Direccón ip de la petición');
            $table->timestamps();
            $table->unsignedBigInteger('id_user')->comment('Identificador del usuario');
            $table->unsignedBigInteger('cod_platform')->comment('Código de la plataforma');
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
        Schema::dropIfExists('log_user_access_platforms');
    }
}
