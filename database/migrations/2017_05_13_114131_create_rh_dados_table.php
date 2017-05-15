<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRhDadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rh_dados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('cargo_id');
            $table->integer('escolaridade_id')->unsigned()->nullable();
            $table->integer('unidade_id')->unsigned()->nullable();
            $table->string('siape', 10);
            $table->date('data_nascimento');
            $table->string('sexo', 1);
        });

        Schema::table('rh_dados', function (Blueprint $table) {
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rh_dados');
    }

}