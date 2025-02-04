<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('cod_category')->comment('Código interno de la categoria');
            $table->string('name')->comment('Nombre de la categoria');
            $table->text('detail')->nullable()->comment('Detalle de la categoria');
            $table->bigInteger('order')->comment('Orden con el que se mostrara');
            $table->boolean('delete')->default(false);
            $table->timestamps();
            $table->unsignedBigInteger('cod_menu')->comment('Menu al que pertenece estas categorias');
            $table->foreign('cod_menu')
                ->references('cod_menu')
                ->on('menu')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
