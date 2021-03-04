<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePlataformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_plataforms', function (Blueprint $table) {
            $table->unsignedBigInteger('cod_rol');
            $table->unsignedBigInteger('cod_plataform');
            $table->timestamps();
            $table->primary(['cod_rol','cod_plataform']);
            $table->foreign('cod_rol')
                ->references('cod_rol')
                ->on('roles')->cascadeOnUpdate();

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
        Schema::dropIfExists('role_access_plataforms');
    }
}
