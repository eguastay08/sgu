<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_access', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('cod_rol')->comment('Código del rol');
            $table->unsignedBigInteger('cod_access')->comment('Código del acceso');
            $table->boolean('active')->default(false)->comment('Verifica si se encuentra activo el permiso');
            $table->primary(['cod_rol','cod_access']);
            $table->foreign('cod_rol')
                ->references('cod_rol')
                ->on('roles')->cascadeOnUpdate();
            $table->foreign('cod_access')
                ->references('cod_access')
                ->on('access')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_access');
    }
}
