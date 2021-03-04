<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquias', function (Blueprint $table) {
            $table->bigIncrements('cod_parroquia')->comment('Código de la parroquia');
            $table->string('name')->comment('Nombre de la parroquia');
            $table->enum('type',['rural','urbana'])->nullable()->comment('Tipo de parroquia, rural o urbana');
            $table->timestamps();
            $table->unsignedBigInteger('cod_canton')->comment('Código del canton al que pertenece la parroquia');
            $table->foreign('cod_canton')
                ->references('cod_canton')
                ->on('cantones')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parroquias');
    }
}
