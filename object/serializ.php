<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>Object Serializ</title>
<body>
<?php
class Person{
  var $name;
  var $sex;
  var $age;
 function __construct($name="",$sex="male",$age=1){
  $this->name=$name;
 $this->sex=$sex;
 $this->age=$age;
}
function setAge($ag){
  $this->age =$ag;
 }
function say(){
 echo "MyName: ".$this->name.", Sex: ".$this->sex.", Age: ".$this->age."<br/>";
}
//对对象的部分成员进行串行化
//在串行化时自动调用该方法
//返回的数组包含需要串行化的属性
function __sleep(){
$arr = array("name","age"); //成员$name和$age 被串行化，成员$sex则被忽略
return $arr;
}
//在反串行化对象时自动调用该方法
//可以为新对象的属性赋值，包括未串行化的属性
function __wakeup(){
 //$this->age=30;
 //$this->sex="female";
}
}
class Persons{
 public $p1;
 var $p2;
 function __construct($p){
   $p1 = $p;
   $p2 =$p;
  }
}
 $p= new Person("sofar","male",25);
 $ps = new Persons($p);
$p_s = serialize($ps);
$pt = unserialize($p_s);
echo "<br/>";
echo $p_s;
echo "<br/>";
//echo $pt->p1->say();//空对象
echo "<br/>";
$t =$p;
 $t->setAge(44);
$p->say();
 $p_serial1= serialize($p);
  $p->setAge(22);
 $p_serial2 = serialize($p);
echo  "<br/>".($p_serial1 ==$p_serial2)."<br/>";
 file_put_contents("person_serial.txt",$p_serial1);
 $p1 = unserialize($p_serial1);
 $p2 = unserialize($p_serial2);
$p2->say(); //p1和p2为不同的两个对象的引用
$p1->sex="female";
$p1->say();
$p2->say();
?>
</body>
</head>
</html>
