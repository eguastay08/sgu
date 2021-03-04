<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->bigIncrements('cod_province')->comment('Código interno de la provincia');
            $table->string('name')->comment('Nombre de la provincia');
            $table->timestamps();
            $table->string('cod_country',2)->comment('Código del pais en iso2 al que pertenece la provincia');
            $table->foreign('cod_country')
                ->references('ISO2')
                ->on('countries')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincias');
    }
}
