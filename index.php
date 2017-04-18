<?php

header('Content-Type: text/html; charset=UTF-8');

define('ROOTPATH', __DIR__); //Endereços absolutos devem usar ROOTPATH pra funcionar.
define('ADMINPATH', ROOTPATH . '/admin/');
define('ASSETSPATH', ROOTPATH . '/assets/');
define('CONFIGPATH', ROOTPATH . '/config/');
define('CONTROLLERPATH', ROOTPATH . '/controller/');
define('DATABASEPATH', ROOTPATH . '/database/');
define('MODULOPATH', ROOTPATH . '/modulo/');
define('VIEWPATH', ROOTPATH . '/view/');
// Debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Faz o roteamento entre as páginas. Avalia _GET[pagina] para
 * escolher qual controller deve carregar. Os controllers é que definem o que
 * precisam carregar e processar, renderizando no final uma página a ser mostrada
 * @global mixed $_GET
 * @global mixed $_POST
 */
function main() {

    global $_GET;
    global $_POST;

    $modulos = array(
        'home' => array(
            'classfile' => CONTROLLERPATH . 'Home.php',
            'class' => 'Home',
        ),
        'teste' => array(
            'classfile' => CONTROLLERPATH . 'Teste.php',
            'class' => 'Teste',
        ),
        'noticia' => array(
            'classfile' => CONTROLLERPATH . 'Noticia.php',
            'class' => 'Noticia',
        ),
    );

    // Validação do $pg
    $pg = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'home'; // Se não há _GET, enviar pra página principal

    if (array_key_exists($pg, $modulos)) {

        $mod = $modulos[$pg];
        
        include_once $mod['classfile'];
        $controller = new $mod['class'];
        
        $controller->run();
    } else {
        echo 'ERROR: No controller found (redirecionar pra 404).'; // TODO lidar com 404's aqui
    }
    
}

main();
