<?php
class Person{
  private static $name;
 private $sex;
 private $age;
 static   $hobby; //默认访问权限为public
var $addr;
//构造函数
function __construct($name="",$sex="male",$age=1,$hobby=""){
  self::$name=$name;
 $this->sex = $sex;
 $this->age=$age;
$this->hobby=$hobby;
}
function say(){
  echo "my name is : ".self::$name. ", sex : ".$this->sex." , age : ".$this->age. ", hobby : ".$this->hobby."<br/>";
}
}
?>
