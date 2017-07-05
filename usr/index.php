<?php

include realpath('..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'autoload.php');

if (array_key_exists('SESSIONNAME', $_SERVER) && $_SERVER['SESSIONNAME'] == 'console') {
    die('Not work site');
}
//echo '<pre>'.print_r($_SERVER, true).'<pre>';

$router = new \MVC\System\Router();
$router->run();
