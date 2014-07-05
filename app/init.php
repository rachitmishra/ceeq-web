<?php


require ROOT.'/app/vendor/autoload.php';
require ROOT.'/app/vendor/redbean/rb.phar';

$slimConfig = require_once ROOT.'/app/config/config.php';

$app = new \Slim\Slim($slimConfig);
$app->add(new \Slim\Middleware\ContentTypes());
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

foreach( glob(ROOT . '/app/mvc/helpers/*.php') as $helper) {
	include $helper;
}

foreach( glob(ROOT . '/app/mvc/models/*.php') as $model) {
	include $model;
}

foreach( glob(ROOT . '/app/mvc/controllers/*.php') as $controller) {
	include $controller;
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
