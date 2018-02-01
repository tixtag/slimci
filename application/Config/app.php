<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
use Application\Controllers\Home;
use Application\Library\AuthJwt_lib;

$app->get('/home', Home::class.':home');
$app->get('/join', Home::class.':join');
$app->get('/booking', Home::class.':booking');
$app->get('/maps', Home::class.':maps');
$app->get('/features', Home::class.':features');
$app->get('/partners', Home::class.':partners');
$app->get('/help', Home::class.':help');
