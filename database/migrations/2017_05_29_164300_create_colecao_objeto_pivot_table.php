<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColecaoObjetoPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colecao_objeto', function (Blueprint $table) {
            $table->integer('colecao_id')->unsigned()->index();
            $table->foreign('colecao_id')->references('id')->on('colecoes')->onDelete('cascade');
            $table->integer('objeto_id')->unsigned()->index();
            $table->foreign('objeto_id')->references('id')->on('objetos')->onDelete('cascade');
            $table->primary(['colecao_id', 'objeto_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('colecao_objeto');
    }
}
