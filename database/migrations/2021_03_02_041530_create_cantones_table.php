<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantones', function (Blueprint $table) {
            $table->bigIncrements('cod_canton')->comment('Código interno del canton');
            $table->string('name')->comment('Nombre del cantón');
            $table->unsignedBigInteger('cod_province')->unsigned()->comment('Código de la provincia ala que pertenece el cantón');
            $table->foreign('cod_province')
                ->references('cod_province')
                ->on('provinces')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cantones');
    }
}
