<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Gustavo
 */
class Conexao {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {

        require_once DATABASEPATH . 'Medoo.php';

        if (!isset(self::$instance)) {

            require CONFIGPATH . 'config.php';
            $config = $CONFIGS['db'];

            self::$instance = new \Medoo\Medoo(array(
                'database_type' =>  'mysql',
                'database_name' =>  $config['database'],
                'server'        =>  $config['host'],
                'username'      =>  $config['user'],
                'password'      =>  $config['pass'],
                'charset'       =>  'utf8'
            ));

//            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            self::$instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }

        return self::$instance;
    }

}
