<?php
/**
 * User: chiji
 * Date: 2016/9/7
 * Time: 16:48
 */
namespace CORE\lib;

class Model
{
    public $model;
    public function __construct()
    {
        $this->model = new \PDO(C('dsn'),C('userName'),C('passwd'));
    }
    /*
     * @param String $sql
     * @return Array //query result
     * */
    public function query($sql){
        if(!is_string($sql)){
            return false;
        }
        $pdoStatement = $this->model->query($sql);
        $result = array();
        foreach ($pdoStatement as $row){
            $result[] = $row;
        }
        return $result;
    }

}
