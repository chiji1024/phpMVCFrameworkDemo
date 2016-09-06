<?php
/**
 * User: chiji
 * Date: 2016/9/6
 * Time: 21:13
 */

define('ROOT','./');
define('CORE',ROOT.'CORE/');
define('APP',ROOT.'APP/');

define('DEBUG',true);

require_once CORE.'common/functions.php';
require_once CORE.'MVC.php';


spl_autoload_register('\CORE\MVC::auto_load_class_function');

echo C('DEFAULT_CONTROLLER');