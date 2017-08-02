<?php
/**
 * Singleton pattern with php 单例模式
 * User: DongJuntong
 * Date: 2017/2/9
 * Time: 18:21
 */
class Singleton
{
    private static $instance=null;

    private function __construct()
    {

    }
    private function __clone()
    {

    }

    public static function getInstance()
    {
        if(empty(self::$instance))
        {
            self::$instance=new Singleton();
        }
        return self::$instance;
    }
}
$single1=Singleton::getInstance();
$single1->age=22;

$single2=Singleton::getInstance();
$single2->age=24;

echo "变量1的age:{$single1->age}<br/>";
echo "变量2的age:{$single2->age}<br/>";
