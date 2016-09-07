<?php
/**
 * User: chiji
 * Date: 2016/9/6
 * Time: 21:36
 */

//配置数组
$_config = require CORE.'conf/config.php';


//获得配置
function C($key){
    global $_config;
    if(!is_string($key)){
        return false;
    }
    if(isset($_config[$key])){
        return $_config[$key];
    }else{
        return false;
    }
}