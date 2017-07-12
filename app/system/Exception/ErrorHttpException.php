<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 05.07.2017
 * Time: 20:34
 */

namespace MVC\System\Exception;


class ErrorHttpException extends \Exception
{
    public function __construct()
    {
        parent::__construct("404! Page Not Found", 404, null);
    }

    public function showHtml() {
        $twig = new \Twig_Loader_Filesystem(SYSTEM_VIEW);
        $loader = new \Twig_Environment($twig, [
//            'cache' => CACHE_DIR.DIRECTORY_SEPARATOR.'twig'
        ]);

        return $loader->render('404.html.twig', [
            'message' => $this->getMessage()
        ]);
    }

    public function __toString()
    {
        die($this->showHtml());
    }
}