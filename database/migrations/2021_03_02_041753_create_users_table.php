<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('cedula',10)->comment('Número de cédula del usuario');
            $table->string('f_name')->comment('Primer nombre del usuario');
            $table->string('s_name')->nullable()->comment('Segundo nombre del usuario');
            $table->string('f_surname')->comment('Primer apellido del usuario');
            $table->string('s_surname')->nullable()->comment('Segundo apellido del usuario');
            $table->enum('gender',['masculino','femenino','otro'])->nullable()->comment('Genero del usuario');
            $table->string('mobile',10)->nullable()->comment('Número de celular del usuario');
            $table->string('phone',15)->nullable()->comment('Número de telefono del usuario');
            $table->string('photography')->comment('Ruta de la fotografia del usuario');
            $table->date('date_of_birth')->comment('Fecha de nacimiento del usuario');
            $table->string('ethnicity')->nullable()->comment('Etnia del usuario');
            $table->enum('type_of_disability',['Discapacidad física','Discapacidad sensorial','Discapacidad intelectual','Discapacidad psíquica','Discapacidad visceral','Discapacidad múltiple'])->nullable()->comment('Tipo de discapacidad del usuario');
            $table->string('percentage_of_disability')->nullable()->comment('Porcentaje de discapacidad del usuario');
            $table->string('cod_conadis')->nullable()->comment('Codigo de registro del conadis en el caso de ser una persona discapacitada');
            $table->string('civil_status')->nullable()->comment('Estado civil del usuario');
            $table->string('type_auth')->default('oidc')->comment('Tipo de autenticación que utilizara el usuario, po defecto se utilizara open id connect (oidc)');
            $table->string('password')->nullable()->comment('Password del usuario, en el caso de requerir ingreso manual');
            $table->string('email')->unique()->comment('Correo electronico personal del usuario')->nullable();
            $table->string('email_inst')->unique()->comment('Correo electronico institucional del usuario')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->boolean('deleted')->default(false)->comment('En el caso de que se elimine el campo cambiara a true');
            $table->timestamps();
            /*Claves foraneas*/
            $table->string('cedula_father',10)->nullable()->comment('Número de cedula del padre');
            $table->string('cedula_mother',10)->nullable()->comment('Número de cedula de la madre');
            $table->string('cedula_emergency_contact',10)->nullable()->comment('Número de cedula del contacto en caso de emergencia');
            $table->unsignedBigInteger('cod_parroquia')->nullable()->comment('Código de la parroquia en la que nacio el usuario');
            $table->primary('cedula');
            $table->foreign('cedula_father')
                ->references('cedula')
                ->on('users')->cascadeOnUpdate();
            $table->foreign('cedula_mother')
                ->references('cedula')
                ->on('users')->cascadeOnUpdate();
            $table->foreign('cedula_emergency_contact')
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
        Schema::dropIfExists('users');
    }
}
