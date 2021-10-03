<?php
/**
 * User: Bishoy Souser
 * Email: Bishoysouser@gmail.com
 */

require_once __DIR__.'/vendor/autoload.php';

use app\core\Application;

$app = new Application();

// $router = new Router();

// $router->get('/', function() {
//     return "Hello World!";
// });
$app->router->get('/', function() {
    return "Hello World!";
});

$app->router->get('/contact', function() {
    return "contact us";
});

// $app->userRouter($router);

$app->run();