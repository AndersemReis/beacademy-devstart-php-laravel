<?php
include 'modulo03\projeto-final\vendor\autoload.php';

use App\Connection\Connection;

$connection = Connection::getConnection();
$query = 'SELECT * FROM tb_category';
$preparacao = $connection->prepare($query); 
$preparacao->execute();

var_dump($preparacao);

while ($registre = $preparacao->fetch()){
    var_dump($registre);
}
/*
use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;

$url = explode('?',$_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName){
    return [
        'controller' => $controllerName,
        'method' => $methodName,
    ];
}

$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),
    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/produtos/novo' => createRoute(ProductController::class, 'addAction')
];

if(false === isset($routes[$url])) {
    (new ErrorController()) -> notFoundAction();
    exit;

}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName()) -> $methodName();
*/