<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRhDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rh_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cargo_id');
            $table->integer('escolaridade_id');
            $table->integer('unidade_id');
            $table->string('siape', 10);
            $table->string('cpf', 11);
            $table->string('sexo', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rh_datas');
    }
}
