<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.07.2017
 * Time: 19:51
 */

namespace MVC\System;


class View
{
    private static $_instance;

    public $view;

    public function __construct()
    {
        $view = new \Twig_Loader_Filesystem(APP_PATH.DIRECTORY_SEPARATOR.'view');
        $view->addPath(APP_PATH.DIRECTORY_SEPARATOR.'view', 'index');
        $this->view = new \Twig_Environment($view);
    }

    private function __clone() {}

    public static function init() {
        if(!self::$_instance instanceof View) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
}