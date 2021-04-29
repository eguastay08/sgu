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
            $table->bigIncrements('id',10000)->comment("Código unico del usuario");
            $table->string('cedula',10)->unique()->comment('Número de cédula del usuario');
            $table->string('f_name')->comment('Primer nombre del usuario');
            $table->string('s_name')->nullable()->comment('Segundo nombre del usuario');
            $table->string('f_surname')->comment('Primer apellido del usuario');
            $table->string('s_surname')->nullable()->comment('Segundo apellido del usuario');
            $table->enum('gender',['Masculino','Femenino','LGBT','Otro'])->nullable()->comment('Genero del usuario');
            $table->string('mobile',10)->nullable()->comment('Número de celular del usuario');
            $table->string('phone',15)->nullable()->comment('Número de telefono del usuario');
            $table->string('photography')->nullable()->comment('Ruta de la fotografia del usuario');
            $table->date('date_of_birth')->nullable()->comment('Fecha de nacimiento del usuario');
            $table->enum('ethnicity',['Afroecuatoriano/a','Blanco/a','Indigena','Mestizo/a','Montubio/a','Mulato/a','Negro/a','Otro'])->nullable()->comment('Etnia del usuario');
            $table->enum('type_of_disability',['Discapacidad física','Discapacidad sensorial','Discapacidad intelectual','Discapacidad psíquica','Discapacidad visceral','Discapacidad múltiple'])->nullable()->comment('Tipo de discapacidad del usuario');
            $table->string('percentage_of_disability')->nullable()->comment('Porcentaje de discapacidad del usuario');
            $table->string('cod_conadis')->nullable()->comment('Codigo de registro del conadis en el caso de ser una persona discapacitada');
            $table->enum('civil_status',['Casado/a', 'Soltero/a', 'Divorciado/a', 'Viudo/a','Unión de Hecho'])->nullable()->comment('Estado civil del usuario');
            $table->string('type_auth')->nullable()->default(null)->comment('Tipo de autenticación que utilizara el usuario, po defecto se utilizara open id connect (oidc)');
            $table->string('password')->nullable()->comment('Password del usuario, en el caso de requerir ingreso manual');
            $table->string('email')->unique()->comment('Correo electronico personal del usuario')->nullable();
            $table->string('email_inst')->unique()->comment('Correo electronico institucional del usuario')->nullable();
            $table->timestamp('email_verified_at')->nullable()->comment('Fecha de verificacion email');
            $table->string('confirmation_code')->nullable()->comment('Codigo de confirmacion de email');
            $table->rememberToken();
            $table->timestamp('remember_toke_valid_time')->nullable()->comment('Tiempo de validez del token para resetear password');
            $table->boolean('deleted')->default(false)->comment('En el caso de que se elimine el campo cambiara a true');
            $table->boolean('update_password')->default(true)->comment("Si el usuario esta obligado a actualizar el password");
            $table->timestamps();
            /*Claves foraneas*/
            $table->unsignedBigInteger('id_father')->nullable()->comment('Identificador del padre');
            $table->unsignedBigInteger('id_mother')->nullable()->comment('Identificador de la madre');
            $table->unsignedBigInteger('id_emergency_contact')->nullable()->comment('Identificador del contacto en caso de emergencia');
            $table->unsignedBigInteger('cod_parroquia')->nullable()->comment('Código de la parroquia en la que nacio el usuario');

            $table->foreign('id_father')
                ->references('id')
                ->on('users')->cascadeOnUpdate();
            $table->foreign('id_mother')
                ->references('id')
                ->on('users')->cascadeOnUpdate();
            $table->foreign('id_emergency_contact')
                ->references('id')
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
