<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access', function (Blueprint $table) {
            $table->bigIncrements('cod_access')->comment('Código interno del acceso');
            $table->string('name')->comment('Nombre del acceso');
            $table->string('endpoint')->comment('endpoint del api al que accedera');
            $table->enum('method',['GET','POST','PUT','DELETE','OPTIONS'])->comment('Acción que podra realizar en el endpoint');
            $table->text('detail')->nullable();
            $table->unsignedBigInteger('cod_item_menu')->comment('Llave foranea que apunta al uri del fronent');
            $table->timestamps();
            $table->foreign('cod_item_menu')
                ->references('cod_item_menu')
                ->on('item_menu')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access');
    }
}
