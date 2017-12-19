<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

//Rotas
$app->get('/', function () {
    echo "Home Page";
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

?>