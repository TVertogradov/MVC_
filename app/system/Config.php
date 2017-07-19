<?php
/**
 * Created by PhpStorm.
 * User: timon
 * Date: 07.06.2017
 * Time: 20:07
 */

namespace MVC\System;


class Config
{
    private static $instance;

    private $_node = [];

    private function __construct()
    {
        $lists = scandir(CONFIG_PATH);
        foreach ($lists as $nameFile) {
            if(preg_match('/\.php/', $nameFile)) {
                $this->_node[str_replace('.php', null, $nameFile)]
                = include CONFIG_PATH . DIRECTORY_SEPARATOR . $nameFile;
            }

        }
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function searchKey($keys = []){
        $firstKey = array_shift($keys);
        if (array_key_exists($firstKey, $this->_node)){
            if (!count($keys) == 1){
                return $this->_node[$firstKey];
            }

            $lists = $this->_node[$firstKey];

            foreach ($keys as $key){
                if (is_array($lists) && array_key_exists($key, $lists)){
                    $lists = $lists[$key];
                } else{
                    return $lists;
                }
            }
            return $lists;
        }else{
            return null;
        }

    }




    /**
     * @param null|string $pattern
     * @return Config
     */
    public static function get($pattern = null){
        if(!self::$instance instanceof Config){
            self::$instance = new self();
        }

        if($pattern) {
            $searchKeys = explode('.', $pattern);
            if($pattern) {

                return self::$instance->searchKey($searchKeys);
            }
        }

        return self::$instance->_node;
    }
}