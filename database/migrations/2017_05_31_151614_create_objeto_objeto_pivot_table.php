<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjetoObjetoPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objeto_objeto', function (Blueprint $table) {
            $table->integer('owner_id')->unsigned()->index();
            $table->integer('owned_id')->unsigned()->index();
        });

        Schema::table('objeto_objeto', function (Blueprint $table){
            $table->primary(['owner_id', 'owned_id']);
            $table->foreign('owner_id')->references('id')->on('objetos')->onDelete('cascade');
            $table->foreign('owned_id')->references('id')->on('objetos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('objeto_objeto');
    }
}
