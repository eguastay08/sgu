<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_generals', function (Blueprint $table) {
            $table->bigIncrements('cod_log')->comment('Código interno del log');
            $table->enum('type',['alert','info','critical'])->comment('Tipo de error');
            $table->string('ip')->nullable()->comment('Direccón ip del clinte');
            $table->string('user_agent')->nullable()->comment('User Agent del cliente');
            $table->text('log')->comment('Detalle del log');
            $table->text('origin')->nullable()->comment('Lugar donde se origina el log');
            $table->unsignedBigInteger('id_user')->comment('Identificador del usuario');
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
        Schema::dropIfExists('log_generals');
    }
}
