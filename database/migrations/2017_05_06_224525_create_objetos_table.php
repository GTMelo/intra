<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('objeto_tipo_id')->unsigned();
            $table->string('descricao');
            $table->string('tldr');
            $table->boolean('ativo');
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::table('objetos', function (Blueprint $table) {
            $table->foreign('objeto_tipo_id')->references('id')->on('objeto_tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objetos');
    }
}
