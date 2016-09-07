<?php
/**
 * User: chiji
 * Date: 2016/9/6
 * Time: 21:13
 */

define('ROOT','./');
define('CORE',ROOT.'CORE/');
define('APP',ROOT.'APP/');
define('MODULE','\\APP\\');
define('DEBUG',true);

require_once ROOT.'vendor/autoload.php';
require_once CORE.'common/functions.php';
require_once CORE.'MVC.php';

//判断是否是debug状态
if(DEBUG){
    $whoops = new \Whoops\Run();
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
    $whoops->register();
    ini_set('display_errors','On');
} else {
    ini_set('display_errors','Off');
}


spl_autoload_register('\CORE\MVC::auto_load_class_function');

//启动框架
\CORE\MVC::run();
