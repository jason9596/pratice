<?php
abstract class PeopleModel
{
    //添加名字
    public abstract function setName($name);
    
    //添加性别
    public abstract function setSex($sex);
    
    //添加口号
    public abstract function setSlogan($slogan);
}
//定义Product
class DoctorsModel extends PeopleModel
{
    
    public function setName($name)
    {
        echo "我的名字是：".$name;
    }
    
    public function setSex($sex)
    {
        echo "我的性别是：".$sex;
    }
    
    public function setSlogan($slogan)
    {
        echo "医生的口号是：".$slogan;
    }
}
//定义Product
class TeacherModel extends PeopleModel
{
    
    public function setName($name)
    {
        echo "我的名字是：".$name;
    }
    
    public function setSex($sex)
    {
        echo "我的性别是：".$sex;
    }
    
    public function setSlogan($slogan)
    {
        echo "老师的口号是：".$slogan;
    }
}
//定义Builder
abstract class PeopleBuilder  
{  
    public abstract function BuildName();  
    public abstract function BuildSex();  
    public abstract function BuildSlogan();  
    public abstract function GetPeople();  
}

//定义ConcreteBuilder
class DoctorsBuilder  extends Builder
{  
    private $doctors;
    private $arr;

    public function __construct($arr)
    {
        $this->doctors = new DoctorsModel();
        $this->arr = $arr;
    }
    
    public function BuildName()
    {
        $this->doctors->setName($this->arr['name']);
    }  
    public function BuildSex()
    {
        $this->doctors->setSex($this->arr['sex']);
    }
    public function BuildSlogan()
    {
        $this->doctors->setSlogan($this->arr['slogan']);
    }    
}
//Director
$arr=array('name'=>'lily','sex'=>'女'，'slogan'=>'只要献出一点爱 生命因你而精彩 ');
$Doctors = new DoctorsBuilder($arr);
$Doctors->setName();
$Doctors->setSex();
$Doctors->setSlogan();
?>