<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unidade_superior_id')->unsigned()->nullable();
            $table->string('sigla', 10);
            $table->string('descricao');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('unidades', function (Blueprint $table) {
            $table->foreign('unidade_superior_id')->references('id')->on('unidades')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidades');
    }
}