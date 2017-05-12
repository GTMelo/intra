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
            $table->integer('tipo_artigo_id');
            $table->string('titulo');
            $table->string('tldr', 140);
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('artigos', function($table) {
            $table->foreign('autor_id')->references('id')->on('usuarios')->onDelete('set null');
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
