<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLiveParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_live_parroquias', function (Blueprint $table) {
            $table->date('start_date')->comment('Inicio a vivir el el lugar');
            $table->date('end_date')->nullable()->comment('Termino de vivir en el lugar');
            $table->string('references_place')->comment('Referencia del lugar donde vive');
            $table->string('main_street')->comment('Calle principal');
            $table->string('secondary_street')->nullable()->comment('Calle secundaria, puede ir nulo');
            $table->string('house_number')->nullable()->comment('Número de casa');
            $table->timestamps();
            $table->string('cedula',10)->comment('Número de cedula del usuario');
            $table->unsignedBigInteger('cod_parroquia')->comment('codigo de la parroquia');

            $table->primary(['cedula','cod_parroquia','start_date']);
            $table->foreign('cedula')
                ->references('cedula')
                ->on('users')->cascadeOnUpdate();

            $table->foreign('cod_parroquia')
                ->references('cod_parroquia')
                ->on('parroquias')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_live_parroquias');
    }
}
