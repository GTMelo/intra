<?php

use Illuminate\Database\Migrations\Migration;

class CreateListaAniversariantesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
             'CREATE VIEW view_aniversariantes AS
                    SELECT usuarios.id AS \'usuario_id\'
                    FROM usuarios
                    JOIN rh_dados ON rh_dados.usuario_id = usuarios.id
                    WHERE  
                        DATE_ADD(rh_dados.data_nascimento, INTERVAL YEAR(CURDATE())-YEAR(rh_dados.data_nascimento) 
                        + IF(DAYOFYEAR(CURDATE()) > DAYOFYEAR(rh_dados.data_nascimento),1,0) YEAR) 
                            BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND DATE_ADD(CURDATE(), INTERVAL 15 DAY)
                    AND usuarios.ativo = 1
                    ORDER BY MONTH(rh_dados.data_nascimento),DAY(rh_dados.data_nascimento) ASC'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW view_aniversariantes");
    }
}
