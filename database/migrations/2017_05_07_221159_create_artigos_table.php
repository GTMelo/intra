<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('unidade_id')->unsigned()->nullable();
            $table->string('titulo');
            $table->string('tldr', 140);
            $table->boolean('ativo');
            $table->dateTime('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('artigos', function($table) {
            $table->foreign('autor_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('artigo_tipo_id')->references('id')->on('artigo_tipos')->onDelete('set null');
            $table->foreign('unidade_id')->references('id')->on('unidades')->onDelete('set null');
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
