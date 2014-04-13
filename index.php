<?php

require 'app/slim/Slim.php';
require 'api/slim/Rb.phar';

\Slim\Slim::registerAutoloader();

$app = new Slim();

require '../app/routes/session.php';
require '../app/routes/api.php';
require '../app/routes/api.php';

$app->run();

?>
