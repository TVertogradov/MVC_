<?php

include realpath('..'.DIRECTORY_SEPARATOR.'app' . DIRECTORY_SEPARATOR . 'autoload.php');


//\MVC\System\Config::get('router.routes.homePage');
if(array_key_exists('SESSIONNAME', $_SERVER) && $_SERVER['SESSIONNAME'] == 'Console') {
    die('Not Work Site');
}

$router = new \MVC\System\Router();
echo $router->run();