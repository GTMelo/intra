<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Usuario_metadado extends ActiveRecord\Model {
    
    public static $table_name = 'usuario_metadado';
    static $primary_key = 'usuario_id';
    
}

