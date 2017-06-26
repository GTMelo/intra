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
            $table->integer('user_id')->unsigned();
            $table->string('nome_completo')->nullable();
            $table->string('nome_curto')->nullable();
            $table->integer('cargo_id')->nullable();
            $table->integer('escolaridade_id')->unsigned()->nullable();
            $table->integer('unidade_id')->unsigned()->nullable();
            $table->integer('email_id')->nullable();
            $table->string('siape', 10)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('sexo', 1)->nullable();
        });

        Schema::table('usuarios_rh', function (Blueprint $table) {
            $table->primary('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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