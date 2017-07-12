<?php
/**
 * Created by PhpStorm.
 * User: timon
 * Date: 07.06.2017
 * Time: 20:02
 */

namespace MVC\System;


use MVC\System\Exception\ErrorHttpException;

final class Router
{
    private $routersConfig = [];
    private $thisUri = null;
    public function __construct()
    {
        $this->routersConfig = Config::get('router.routers');
        $this->thisUri = $_SERVER['REQUEST_URI'];
        $notScriptName = str_replace('/index.php', null, $_SERVER['SCRIPT_NAME']);
        // fstck2802/usr/about-us --- /about-us
        $this->thisUri = str_replace($notScriptName, "/", $this->thisUri);
    }
    /**
     * 1. УРЛ
     * 2. Найти роутер
     * 3. Запустить объект
     */
    public function run() {
        $router = $this->findRouterConfig();
        if(!$router) {
            throw new ErrorHttpException();
        }


    }

    /**
     * Поиск роутра
     * @return array
     */
    private function findRouterConfig() {
        if(is_array($this->routersConfig) && $this->routersConfig) {
            foreach ($this->routersConfig as $router) {
                if(array_key_exists('pattern', $router) && $router['pattern'] === $this->thisUri) {
                    return $router;
                }
            }
        }


        return [];
    }
}