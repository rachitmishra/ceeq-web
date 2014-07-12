<?php

define('SLIM_MODE_DEV', 'development');
define('SLIM_MODE_PRO', 'production');

define('SLIM_MODE', SLIM_MODE_DEV);

/* Slim configuration */
$slim_configuration =  array(
    'mode'                => SLIM_MODE,
    'cookies.secret_key'  => md5('CEE_EEE_EEQ'),
    'view'                => new \Slim\Views\Twig(),
    'templates.path'      => ROOT.'/app/mvc/views/',
    'debug'               => (SLIM_MODE === SLIM_MODE_DEV),
    'log.enabled'         => (SLIM_MODE === SLIM_MODE_PRO),
    'cookies.cipher' 	  => MCRYPT_RIJNDAEL_256,
    'cookies.cipher_mode' => MCRYPT_MODE_CBC
);

/* Redbean configuration */
$db = R::setup('mysql:host=localhost;dbname=ceeq', 'ceeq','NS28YjmQYB3NUJcf');
return $slim_configuration;