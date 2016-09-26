<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>Parent and Child static const clone call toString  </title>
</head>
<body>
<?php
 class Person{
  private $name;
 private $sex;
 private $age;
public $myref;
function __construct($name="",$sex="male",$age=1){
   $this->name=$name;
   $this->sex=$sex;
  $this->age = $age;
$this->myref=new MyClass();
echo "this is a construct.<br/>";
}
 function say(){
   echo "MyName: ". $this->name. ", Sex: ".$this->sex. ", Age: ".$this->age."<br/>";
}
function bye($msg){
  echo $this->name ."say: ".$msg;
}
//克隆对象时调用该函数
function __clone(){
 $this->name="zss".$this->name;
 $this->sex="female";
}
function __toString(){
 return "Name: ".$this->name.", Sex: ".$this->sex.",Age: ".$this->age."<br/>";
}
}
class Student extends Person {
   private $school;
function __construct($name="",$sex="male",$age=1,$school=""){
  parent::__construct($name,$sex,$age);
  $this->school=$school;
}
function say(){
 parent::say();
 echo ", schoole: ".$this->school."<br/>";
}

//不能重复定义同一个方法，即不存在方法的重载
function sayMsg($msg){
  echo "say : ".$msg;
}

//通过__call()模拟方法的重载
//调用时需使用一个未定义的方法名
function __call($m,$params){
   if($m =="says"){
     if(count($params)==0){
       $this->say();
     }elseif(count($params) ==1){
     $this->sayMsg($params);
     }
  }
}
}
class Teacher extends Person{
  function teaching(){
  echo "Myjob is a teacher<br/>";
}
//当调用的函数不存在时，调用该函数
function __call($Func_name,$args){
echo "the function you call : " .$Func_name."(param: ";
print_r($args);
echo ") does not exsits!<br/>";
}
//子类在覆盖父类的方法时，方法名和方法参数列表都必须相同，否则会报错
//因为会违反方法重载， 当在子类中定义了一个方法名相同但参数列表不同时，父类的该方法会被继承下来
//因此子类中有两个相同的方法名的方法
/*
public bye(){
  echo "bye";
}
*/
}
class MyClass{
public $a;
 static $count;
const TIP= 'this is a tip';
 function __construct(){
   self::$count++;
}
static function getCount(){
  return self::$count;  //静态方法只能引用静态变量，不能引用非静态变量
}
function getC(){   //非静态方法可以引用静态变量
 return self::$count;
}
function showConst(){
  echo self::TIP."<br/>";
}
}
MyClass::$count=0;
$myc1 =new MyClass();
echo MyClass::getCount();
echo "<br/>";
$myc2 =  new MyClass();
echo $myc2->getC();
echo "<br/>";
$myc3 = new MyClass(); 
echo $myc3->count; //不能用对象来引用静态变量
 echo $myc3->getCount(); //可以用对象来引用静态方法
echo "<br/>";
echo MyClass::TIP;
echo $myc1->TIP; //不能用对象来引用常量成员
echo $myc2->showConst();
$p= new Person("sofar","male",24);
$s= new Student("zhss","male",21,"highschool");
$t= new Teacher("sofarther","female",30,"english");
$p->say();
$s->say();
$t->say();
$s->say("hello");
$t->teaching();
$p->myref->a=10;
$p2 = clone $p;
echo $p2->myref->a;
echo "<br/>";
$p2->myref->a=20;
echo $p->myref->a;
echo "<br/>";
$s->says();
echo "<br/>";
$s->says("hello");
echo $p2;
$t->fun();
$t->bye("msg");
?>
</body>
</html>
