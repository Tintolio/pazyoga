<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_usuarios', function (Blueprint $table) {
            $table->integer('user_id')->nullable();
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('sexo')->nullable();
            $table->string('nivel')->nullable();
            $table->string('telefono')->nullable();

            // $table->foreign('datos_id')->references('id')->on('users')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');

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
        Schema::dropIfExists('datos_usuarios');
    }
}
