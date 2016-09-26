<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>class</title>
</head>
<body>
<?php
error_reporting(E_ALL&~(E_NOTICE|E_WARNING));
//error_reporting(E_ALL);
/*
不能通过对象访问静态属性，但可以访问静态方法
静态方法中不能使用伪变量$this
非静态方法可以访问静态属性和方法
*/
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
function test($a){
//在类中引用属性时，必须使用$this关键字来引用，否则PHP会认为 $age为该方法中定义的局部变量
   $age +=$a;
}
function say(){
  echo "my name is : ".self::$name. ", sex : ".$this->sex." , age : ".$this->age. ", hobby : ".$this->hobby."<br/>";
}
 static function run(){
  echo self::$name. " is walking.<br/>";
}
function __destruct(){
 echo "bye ".$this->name."<br/>";
}
//魔术方法：在特定的条件下自动被调用；需自行编写方法体

//__set()方法：在类外对类的私用成员赋值时自动被调用：$p1->$name="zss"
//故可以通过定义该方法对私有变量赋值
//若没有该方法的定义，则不能对类的私有成员赋值
//对于public访问权限的成员变量的赋值不会调用该函数
private function __set($prop_name,$prop_value){
//防止用户自行调用，故设置为private
  if($prop_name=="sex"){
      if(!($prop_value=="male"||$prop_value=="female"))
         return;  //参数只能为male或female否则直接返回
}
 if($prop_name=="age"){
  if($prop_value>150||$prop_value<0)
    return;
}
if($prop_name=="hobby") { //public访问权限的成员变量的赋值不会调用__set()函数
  $this->hobby="studing";
  return;
}
if($prop_name=="addr"){
 $this->addr="china";
 return;
}
if($prop_name=="tmp"){
  $this->tmp="temple";
return;
}
 $this->$prop_name=$prop_value;
}
//__get()方法在访问私有变量时自动被调用：$sex=$p2->sex

private function __get($prop_name){
  if($prop_name=="name") return "NickName";
 elseif($prop_name=="sex") return "secret";
elseif($prop_name=="age"){
  if($this->age>30) return $this->age-10;
  else return $this->age;
}
elseif($prop_name=="hobby") return "nothing";
else if($prop_name=="tmp") return "temp";
else return $this->$prop_name;
}
private function  __isset($prop_name){
  if($prop_name=="name") return false;
 else if($prop_name=="hobby") return false;
else return isset($this->$prop_name);
}
private function __unset($prop_name){
  if($prop_name=="name") return;
  if($prop_name=="hobby") return;
 unset($this->$prop_name);
}
}
//类实例化
$p1= new Person("sofar","male",24,"computer");
$p2= new Person("zhss","male",21,"reading");
$p3= new Person("sofarther","female",32,"music");
$p1->say();
$p2->say();
$p3->say();
$p1->run();
$p2->hobby="movie";
$p2->say();
//$p1->sex="female";
$p1->say();
$p2=null;
/*
echo $p3->hobby;
echo $p3->name;
echo $p3->age;
echo $p1->sex;
*/
echo "<br/>";
var_dump(isset($p1->hobby));
unset($p1->hobby);
var_dump(isset($p1->hobby));
$p1->hobby="xxxx";
echo "now,hobby : "  .$p1->hobby;
echo "<br/>";
/*
var_dump(isset($p3->name));
var_dump(isset($p3->sex));
var_dump(isset($p3->age));
echo "<br/>";
unset($p3->name);
unset($p3->sex);
unset($p3->age);
$p3->sex="male";
$p3->age=17;
echo $p3->name." sex: ".$p3->sex. ", age: ".$p3->age."<br/>";
*/
$p3->tmp="test";
echo "test for unknown var: " .$p3->tmp."<br/>";
unset($p3->addr);
$p3->addr="aaaaaa";
echo "addr: ".$p3->addr."<br/>";
$p1->test(10);
echo "now age : ".$p1->age."<br/>";
?>
</body>
</html>
