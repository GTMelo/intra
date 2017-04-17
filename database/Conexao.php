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

            $config = require CONFIGPATH . 'config.php';

            self::$instance = new \Medoo\Medoo(array(
                'database_type' => 'mysql',
                'database_name' => $config['db']['database'],
                'server' => $config['db']['host'],
                'username' => $config['db']['user'],
                'password' => $config['db']['pass'],
                'charset' => 'utf8'
            ));


//            self::$instance = new PDO(
//                    'mysql:host=' . $config['db']['host']
//                    . ';dbname=' . $config['db']['database']
//                    . ';charset=utf8'
//                    , $config['db']['user']
//                    , $config['db']['pass']
//            );
//            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            self::$instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }

        return self::$instance;
    }

}
