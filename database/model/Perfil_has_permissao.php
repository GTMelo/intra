<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Perfil_has_permissao extends ActiveRecord\Model {
    
    public static $table_name = 'perfil_has_permissao';
    static $primary_key = 'perfil_id';
    
}

