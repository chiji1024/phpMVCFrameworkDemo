<?php
/**
 * User: chiji
 * Date: 2016/9/6
 * Time: 21:41
 */

namespace CORE;


class MVC{




    public static function auto_load_class_function($class){
        $classFile = ROOT.$class;
        $classFile = str_replace('\\','/',$classFile).'.php';
        if(is_file($classFile)){
            require_once $classFile;
        }else{
            throw new \Exception($classFile.'类文件不存在');
        }
    }

}