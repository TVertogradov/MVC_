<?php

/**
 * Created by PhpStorm.
 * User: timon
 * Date: 05.07.2017
 * Time: 20:34
 */
namespace MVC\System\Exception;


class ErrorHttpException extends \Exception
{

    public function __construct()
    {
        parent::__construct("404! Page not found",  404 );
    }

    public function showHtml(){
    $twig = new \Twig_Loader_Filesystem();
    $loader = new \Twig_Environment($twig, [
        'cache' => CACHE_DIR.DIRECTORY_SEPARATOR.'twig'
    ]);

    return $loader->render('404.html.twig');
}
    public function __toString()
    {
        return $this->showHtml();
    }
}