<?php
/**
 * User: chiji
 * Date: 2016/9/6
 * Time: 21:36
 */

//配置数组
$_config = require CORE.'conf/config.php';

//判断是否是debug状态
if(DEBUG){
    ini_set('display_errors','On');
} else {
    ini_set('display_errors','Off');
}

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