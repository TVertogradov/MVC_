<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.07.2017
 * Time: 19:42
 */

namespace MVC\System;


abstract class Controller
{
    /**
     * @var \Twig_Environment
     */
    protected $view;

    public function __construct()
    {
        $this->view = View::init()->view;
    }

    public function render($pathTwigFile, $params = []) {
       $template = $this->view->load($pathTwigFile);
        return $template->render($params);
    }
}