<html>
  <head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  <title>变量</title>  
</head>
 <body>
  <?php
   $v;
  echo $v;//Notice:没有定义的变量
  $v++;
echo $v; //Notice:没有定义的变量,1
  echo "<br/>";
  var_dump($v);//null，即当变量没有赋值时，php不会为该变量分配内存空间
   //关于int
    echo PHP_INT_SIZE; //8
    echo PHP_INT_MAX<<1;
   echo "<br/>";
   echo PHP_INT_MAX;//9223372036854775807
   $a = PHP_INT_MAX +1;
 var_dump($a);//float
$b = -PHP_INT_MAX-1;
  var_dump($b);//int
 //关于boolean
  //以下为false：0, 0.0, "", "0", null,没有成员变量的数组
  $s = "0"; //当为"0"时，转换为boolean时为false
  if($s){
    echo "ture";
  }else{
    echo "false";
  }
 echo "<br/>";
//关于float精度
$a=0.00012345678912345; //php默认精度为14， 表示从左边第一个非零的数开始计
$b=123.98765432109876;  //输出123.9876543211
$b=123.98765432105876;  //输出123.98765432106 
echo "<br/>";
//关于字符串单双引号: 双引号中的变量会被解析
echo "\'hello\'<br/>"; //\'hello\'
echo '\'world\'<br/>';//'world'
echo '\"hello\"<br/>';//\"hello\"

echo '\n line\n'; //\n line\n
echo "\$a=$a ;\$b=$b";
//关于 逻辑运算符 && || and or
//or and 运算符的优先级小于=运算符
 $e = false || true; //true
$f =false or true; //false 
var_dump($e,$f);
$n = true && false; //false
$r = true and false; //true
var_dump($n,$r);
$h=3;
$f =true or $h++; //$h=3
$f = false or $h++; //$h=4;
echo $h;
//关于instanceof类型运算符: 只能判断变量是否为某个类对象,不能用于判断基本类型
class Dog{};
class Cat{};
$cat1 = new Cat;
if($cat1 instanceof Cat){
     echo '$cat is Cat';
  }
 if($h instanceof integer){
  echo '$h is integer';
 }else{
   echo "$h is not a integer"; //4 is not a integer
 }
$n1=10;
$n2=2;
echo ceil($n1/$n2);//5
  ?>
 </body>
</html>
