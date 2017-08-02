<?php
/**
 * Factory pattern with php 工厂模式
 * User: DongJuntong
 * Date: 2017/2/20
 * Time: 11:22
 */
interface abstracted {
    public function realCreate();
}
class Women {
    public function action() {
        echo '女人';
    }
}

class Man {
    public function  action() {
        echo '男人';
    }
}

class ManCreator implements abstracted {
    public $chromosome;
    public function realCreate(){
        if ($this->chromosome == "xy" || $this->chromosome == "xyy") {
            return new Man();
        }
    }
}

class WomenCreator implements abstracted {
    public $chromosome;
    public function realCreate(){
        if ($this->chromosome == "xx") {
            return new Women();
        }
    }
}

class PersonFactory{
    public function create($what){
        $create = $what."Creator";
        return $create = new $create();
    }
}

$create = new PersonFactory();
$instance = $create->create('Woman');
$instance->chromosome = "xx";
$instance->realCreate()->action();
