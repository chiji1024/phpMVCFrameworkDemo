<?php
/**
 * User: chiji
 * Date: 2016/9/6
 * Time: 21:41
 */

namespace CORE;


class MVC{

    protected $assignArr = array();
    public static function run(){
        $route = new \CORE\lib\Route();
        $ctrlClass = $route->controller;
        $action = $route->action;
        $ctrlFile = APP.'controller/'.$ctrlClass.'Controller.php';
        $ctrlClass = MODULE.'controller\\'.$ctrlClass.'Controller';
        $ctrl = new $ctrlClass();
        $ctrl->$action();
    }

    public static function auto_load_class_function($class){
        $classFile = ROOT.$class;
        $classFile = str_replace('\\','/',$classFile).'.php';
        if(is_file($classFile)){
            require_once $classFile;
        }else{
            throw new \Exception($classFile.'类文件不存在');
        }
    }

    public function assign($name,$val){
        $this->assignArr[$name] = $val;
    }
    public function display($view = 'index'){
        extract($this->assignArr);
        include APP.'view/'.$view.'.html';
    }

}