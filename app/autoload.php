<?php

define('CONFIG_PATH', realpath(__DIR__.DIRECTORY_SEPARATOR.'config'));
define('CACHE_DIR', realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'var'.DIRECTORY_SEPARATOR.'cache'));
define('SYSTEM_VIEW', realpath(__DIR__.DIRECTORY_SEPARATOR.'system'.DIRECTORY_SEPARATOR.'view'));
if (!is_dir(CONFIG_PATH)){
    throw new ErrorException("System not found config dir");
}

if(!is_dir(CACHE_DIR)) {
    mkdir(CACHE_DIR, 0777, true);
}


require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');
