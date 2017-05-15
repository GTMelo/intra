<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFksToCidadeEstadoPaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cidades', function (Blueprint $table) {
            $table->foreign('estado_id')->references('id')->on('estados');
        });
        Schema::table('estados', function (Blueprint $table) {
            $table->foreign('capital_id')->references('id')->on('cidades');
            $table->foreign('pais_id')->references('id')->on('paises');

        });
        Schema::table('paises', function (Blueprint $table) {
            $table->foreign('capital_id')->references('id')->on('cidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cidades', function (Blueprint $table) {
            $table->dropForeign('estado_id');
        });
        Schema::table('estados', function (Blueprint $table) {
            $table->dropForeign('capital_id');
            $table->dropForeign('pais_id');

        });
        Schema::table('paises', function (Blueprint $table) {
            $table->dropForeign('capital_id');
        });

    }
}
