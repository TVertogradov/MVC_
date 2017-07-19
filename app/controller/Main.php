<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.07.2017
 * Time: 19:42
 */

namespace App\Controller;


use MVC\System\Controller;

class Main extends Controller
{
    public function indexAction($) {

        return $this->render('main/v_index_main.html.twig', [
            'rand' => rand()
        ]);
    }
}