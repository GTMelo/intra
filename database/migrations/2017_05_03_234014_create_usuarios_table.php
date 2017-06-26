<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::create('usuarios', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('cpf', 11);
//            $table->string('nome_completo');
//            $table->string('nome_curto');
//            $table->string('password');
//            $table->rememberToken()->nullable();
//            $table->boolean('ativo')->default(false);
//            $table->timestamps();
//            $table->timestamp('last_access')->nullable();
//            $table->softDeletes();
//        });
//    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
