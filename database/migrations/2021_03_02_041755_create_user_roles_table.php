<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('cod_rol')->comment('Código del rol');
            $table->string('cedula')->comment('Número de cedula del usuario');
            $table->primary(['cedula','cod_rol']);
            $table->foreign('cedula')
                ->references('cedula')
                ->on('users')->cascadeOnUpdate();
            $table->foreign('cod_rol')
                ->references('cod_rol')
                ->on('roles')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}
