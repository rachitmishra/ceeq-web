<?php


require ROOT.'/app/vendor/autoload.php';
require ROOT.'/app/vendor/redbean/rb.phar';

$slim_configuration = require_once ROOT.'/app/config/config.php';

$app = new \Slim\Slim($slim_configuration);
$app->setName('Ceeq');

session_cache_limiter(false);
session_start();

$resourceUri = $_SERVER['REQUEST_URI'];
$rootUri = $app->request()->getRootUri();
$assetUri = $rootUri;

$app->view()->appendData(
				array(	
					'app' 		  => $app,
					'rootUri' 	  => $rootUri,
					'assetUri' 	  => $assetUri,
					'resourceUri' => $resourceUri
				)
			);

foreach( glob(ROOT . '/app/routes/*.php') as $router) {
	include $router;
}

foreach( glob(ROOT . '/app/models/*.php') as $model) {
	include $model;
}

$view = $app->view();
$view->parserOptions = array(
    'debug' 	  => true,
    'cache' 	  => ROOT . '/app/storage/cache/twig',
    'auto_reload' => true,
);

$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

return $app;