<?php

require '../slim/Slim.php';
require '../slim/Rb.phar';

\Slim\Slim::registerAutoloader();

R::setup('mysql:host=localhost; dbname=ceeq', 'ceeq', 'TwenT8X9T!');
R::freeze(true);

$app = new Slim();


$app->run();

?>
