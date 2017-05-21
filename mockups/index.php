<?php
header('Content-Type: text/html; charset=UTF-8');

// Debugging
ini_set('display_errors', 1);
error_reporting(~0);
include_once './core/util.php';

// Funções para a index
/**
 * Escolhe qual template será carregado.
 *
 * <p>Avalia o parâmetro _GET['pagina']. Se vazio, escolher home
 * Se houver pagina, avaliar se pagina existe:
 * <ul>
 *      <li>Se existir, escolhe a página.</li>
 *      <li>Se não existir, retorna home.</li>
 * </ul>
 * </p>
 * @param String $templateExtensao (opcional) Extensão do template.
 * @param String $suprimirExtensao (opcional) Se true, resultado tem extensão suprimida
 *
 * @return String 'home' para pg inicial ou nome do template a ser carregado
 */
function escolhePagina($templateExtensao = 'phtml', $suprimirExtensao = false)
{

    global $_GET;

    // array de páginas que o sistema reconhece como possíveis.
    // é necessário adicionar uma entrada aqui para que o site saiba
    // qual template carregar. Usar o mesmo nome do template.
    $paginasPossiveis = array(
        'home',
        'noticia'
    );

    $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : false;

    $result = '';

    if ($pagina != false) {
        if (in_array($pagina, $paginasPossiveis)) {
            $result = ($suprimirExtensao) ? $pagina : $pagina . '.' . $templateExtensao;
        } else {
            $result = ($suprimirExtensao) ? 'home' : 'home.' . $templateExtensao;
        }
    } else {
        $result = ($suprimirExtensao) ? 'home' : 'home.' . $templateExtensao;
    }

    return $result;
}

/**
 * Processa o _GET pra obter qual página foi solicitada, e carrega passando também o _GET e _POST
 * @return [type]         [description]
 */
function escolheController()
{

    global $_GET;

    // O param a ser lido é o "pagina", que é usado para identificar a página como um todo
    $pg = $_GET['pagina'];

    // Array de valores aceitos como controllers válidos.
    $pgsPossiveis = array(
        'home',     // página principal
    );

    $testeTemPg = isset($_GET['pagina']);
    $testePgWhitelist = in_array($pg, $pgsPossiveis);

    $result = '';

    try {
        if (!$testeTemPg) throw new
    }


}

//Inicia a conexão com o banco de dados
require_once './core/data/db.php';


// Inicia o template engine
require_once './core/view/.twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('./core/view/templates');
$twig = new Twig_Environment($loader, array('debug' => true));


//Escolhe o template
$pagina = escolhePagina();
$template = $twig->loadTemplate($pagina);


// Obtém dados
$dadosController = escolhePagina('php');
$params = array(
    'carrossel' => array(
        array(
            'imagem' => 'c_14.png',
            'title' => 'Teste de notícia',
            'description' => 'Descrição da notícia aqui',
            'url' => 'urlhere'
        ),
        array(
            'imagem' => 'c_14.png',
            'title' => 'Teste de notícia 2',
            'description' => 'Descrição da notícia aqui',
            'url' => 'urlhere'
        ),
        array(
            'imagem' => 'c_14.png',
            'title' => 'Teste de notícia 3',
            'description' => 'Descrição da notícia aqui',
            'url' => 'urlhere'
        ),
    )
);

// Renderiza página final
$template->display($params);
