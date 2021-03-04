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
            $table->string('ip')->comment('Direccón ip del clinte');
            $table->string('user_agent')->comment('User Agent del cliente');
            $table->text('log')->comment('Detalle del log');
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
