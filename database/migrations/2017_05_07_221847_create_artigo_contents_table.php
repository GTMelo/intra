<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigoContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigo_contents', function (Blueprint $table) {
            $table->integer('artigo_id')->unsigned();
            $table->longText('conteudo');
        });

        Schema::table('artigo_contents', function (Blueprint $table) {
            $table->primary('artigo_id');
            $table->foreign('artigo_id')->references('id')->on('artigos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigo_contents');
    }
}
