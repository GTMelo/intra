<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Usuario_has_perfil extends ActiveRecord\Model {
    
    public static $table_name = 'usuario_has_perfil';
    static $primary_key = 'usuario_id';
    
}

