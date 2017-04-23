<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Usuario_has_email extends ActiveRecord\Model {
    
    public static $table_name = 'usuario_has_email';
    static $primary_key = 'usuario_id';
    
}

