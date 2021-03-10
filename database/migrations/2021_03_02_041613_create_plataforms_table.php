<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlataformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plataforms', function (Blueprint $table) {
            $table->bigIncrements('cod_plataform')->comment('Código unico interno en la tabla');
            $table->string('name')->comment('Nombre de la plataforma');
            $table->string('image')->comment('Url de la imagen de la plataforma');
            $table->string('url')->unique()->comment('Url de ingreso a la plataforma');
            $table->boolean('session_required')->default(true)->comment('Si la plataforma requiere que exista una session');
            $table->text('detail')->nullable()->comment('Detalle y/o comentario de la plataforma');
            $table->boolean('deleted')->default(false)->comment('En el caso de que se elimine el campo cambiara a true');
            $table->timestamps();
            $table->unsignedBigInteger('cod_category')->comment('Código de la categoria a la que pertenece la plataforma');
            $table->foreign('cod_category')
                ->references('cod_category')
                ->on('categories')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plataforms');
    }
}
