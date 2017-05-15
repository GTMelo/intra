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
            $table->dropForeign('cidades_estado_id_foreign');
        });
        Schema::table('estados', function (Blueprint $table) {
            $table->dropForeign('estados_capital_id_foreign');
            $table->dropForeign('estados_pais_id_foreign');

        });
        Schema::table('paises', function (Blueprint $table) {
            $table->dropForeign('paises_capital_id_foreign');
        });

    }
}
