<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('usuario_id')->unsigned();
            $table->integer('cargo_id');
            $table->integer('escolaridade_id')->unsigned()->nullable();
            $table->integer('unidade_id')->unsigned()->nullable();
            $table->string('siape', 10);
            $table->date('data_nascimento');
            $table->string('sexo', 1);
        });

        Schema::table('rh_dados', function (Blueprint $table) {
            $table->primary('usuario_id');
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