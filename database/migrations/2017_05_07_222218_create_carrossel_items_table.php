<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosselItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrossel_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('artigo_id')->unsigned();
            $table->integer('imagem_id')->unsigned();
            $table->string('custom_titulo')->nullable();
            $table->string('custom_tldr')->nullable();
            $table->boolean('ativo');
            $table->dateTime('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('carrossel_items', function (Blueprint $table) {
            $table->foreign('artigo_id')->references('id')->on('artigos');
            $table->foreign('imagem_id')->references('id')->on('objetos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrossel_items');
    }
}
