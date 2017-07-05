<?php

define('CONFIG_PATH', realpath(DIRECTORY_SEPARATOR . 'config'));

if (!is_dir(CONFIG_PATH)){

    throw new ErrorException("System not found config dir");
}


require_once realpath('..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autload.php');