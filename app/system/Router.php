<?php
/**
 * Created by PhpStorm.
 * User: timon
 * Date: 07.06.2017
 * Time: 20:02
 */

namespace MVC\System;


final class Router
{
    private $routersConfig = [];
    private $thisUrl = null;
    public function  __construct()
{
    $this->routersConfig = Config::get('router.routers');
    $this->thisUrl = $_SERVER['REQUEST_URI'];
    $notScriptName = str_replace('index.php', null, $_SERVER['SCRIPT_NAME']);
    $this->thisUrl = str_replace($notScriptName, "/", $this->thisUrl);
}
    public function run() {
        $router = $this->findRouterConfig();
        if (!$router){
            throw new \HttpException("Page not found", 404);
        }
        /**
         * 1. URL
         * 2. Search router
         * 3. Run obj
         */
    }

    private function findRouterConfig(){
        foreach ($this->routersConfig as $router){
            if (array_key_exists('pattern', $router) && $router['pattern'] === $this->thisUrl){
                return $router;
            }
        }

        return [];
    }
}