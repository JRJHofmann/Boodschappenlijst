<?php 
$titlePag ="routing";
include "functions.php";
$mappingRoute = [
    '/' => 'controllers/index.php',
    '/index.php' => 'controlles/index.php',
    '/create.php' => 'controllers/create.php'
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        include $routes[$uri];
    } else {
        abort();
    }
}

function abort(){
    http_response_code(404);
    require "view/404.php";
    die();
}
?>