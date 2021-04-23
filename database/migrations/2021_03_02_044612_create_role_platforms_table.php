<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_platforms', function (Blueprint $table) {
            $table->unsignedBigInteger('cod_rol');
            $table->unsignedBigInteger('cod_platform');
            $table->timestamps();
            $table->primary(['cod_rol','cod_platform']);
            $table->foreign('cod_rol')
                ->references('cod_rol')
                ->on('roles')->cascadeOnUpdate();

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
        Schema::dropIfExists('role_access_platforms');
    }
}
