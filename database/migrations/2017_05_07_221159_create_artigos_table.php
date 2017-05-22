<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('autor_id')->unsigned()->nullable();
            $table->integer('artigo_tipo_id')->unsigned()->nullable();
            $table->string('titulo');
            $table->string('tldr', 140);
            $table->boolean('ativo');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('artigos', function($table) {
            $table->foreign('autor_id')->references('id')->on('usuarios')->onDelete('set null');
            $table->foreign('artigo_tipo_id')->references('id')->on('artigo_tipos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigos');
    }
}
