<?php

require '../slim/slim.php';
require '../vendor/twig/Twig'

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
));

$app->get( '/api/hello/:name', function ($name = false) {
        echo "Hello, $name";
    });

$app->run();
