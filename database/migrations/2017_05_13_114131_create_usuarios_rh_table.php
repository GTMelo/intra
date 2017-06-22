<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosRHTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_rh', function (Blueprint $table) {
            $table->integer('usuario_id')->unsigned();
            $table->integer('cargo_id')->nullable();
            $table->integer('escolaridade_id')->unsigned()->nullable();
            $table->integer('unidade_id')->unsigned()->nullable();
            $table->string('siape', 10)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('sexo', 1)->nullable();
        });

        Schema::table('usuarios_rh', function (Blueprint $table) {
            $table->primary('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_rh');
    }

}