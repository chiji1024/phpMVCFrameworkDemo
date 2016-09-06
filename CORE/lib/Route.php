<?php
/**
 * User: chiji
 * Date: 2016/9/6
 * Time: 22:10
 */

namespace CORE\lib;

class Route{

    private $controller;
    private $action;

    public function __construct(){
        $URI = $_SERVER['REQUEST_URI'];
        if(isset($URI) && $URI != '/'){
            $pathArr = explode('/',trim($URI,'/'));
            if(isset($pathArr[0])){
                $this->controller = $pathArr[0];
            }
            if(isset($pathArr[1])){
                $this->action = $pathArr[1];
            }else{
                $this->action = 'index';
            }


        } else {
            $this->controller = C('DEFAULT_CONTROLLER');
            $this->action = C('DEFAULT_ACTION');
        }
    }






}