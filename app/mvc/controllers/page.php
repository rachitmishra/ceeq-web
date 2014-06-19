<?php

$app->get( '/', function() use ($app) {
    $app->render('home.html.twig');
})->name('home');

$app->get( '/dashboard', function() use ($app) {
    $app->render('dashboard.html.twig');
})->name('dashboard')->conditions(array('authenticate'=>true));
