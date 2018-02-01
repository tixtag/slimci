<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
require __DIR__ . '/../../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__, '../../.env');
$dotenv->load();

$app = new Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
         'db' => [
            'driver'   => 'mysql',
            'host'     => 'localhost',
            'database' => getenv('DB_NAME'),
            'username' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ]
]);
