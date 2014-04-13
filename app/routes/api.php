<?php

require '../slim/slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get( '/api/hello/:name', function ($name = false) {
        echo "Hello, $name";
    });

$app->run();
