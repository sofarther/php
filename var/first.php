<h3>Welcome</h3>
<?php
 echo "<p>Some dynamic output? >  < ? here</p>";
?>
<p>some static output here</p>
<?
  print  'this is a short tag< ?...? >';

?>
<script language="php">
  print "this is a script tag";
#php6中不再支持asp风格标记
</script>

<%
  print "this is asp style \<\%...\%\>";
%>
<?php
  $date="April 6 2015";
?>
<p>Today's date is <?=$date;?></p>
<?php
 printf("a=%c",97);
 $cost=sprintf("$%.2f",43.2);
 echo $cost;
echo "<br/>";
echo "\n"; //在生成的源代码中显示了换行，但html并不识别换行符和空格符
$a="45 fire engines";
echo gettype($a);//string
$f=123.456;
printf( "<br/>\$f type is %s.<br/>",gettype($f));//double
printf("the variable \$a is of type number: %d<br/>",is_numeric($a));//0
printf("the variable \$a is of type string: %d<br/>",is_string($a));//1
$b=10;
$c=$a+$b;
echo $c; //55
echo "<br/>";
$val1="1.2e3";
$val2=2;
echo $val1*$val2; //2400
$x="one";
$y=&$x; //取指针，$y和$x为同一个位置指针
$y="two";
$two="three";
$z=$$x; //three
echo "x=$x<br/>y=$y";
echo "<br/>\$z=$z<br/>";
$globvar=15;
function globtest(){
    $globvar =20; //只是定义了一个局部变量，并不会覆盖全局变量，也不会修改全局变量的值
   function inner(){
    GLOBAL $globvar; // 只能引用 全局变量，不能访问globtest()函数中的$globvar变量值
     echo "inner globvar =  $globvar"; //15
   }
   inner();
}
globtest();
function addit(){
  STATIC $count=0;
  $count++;
  echo $count; //不会清零
 echo "<br/>";
  //GLOBAL $globvar; //引用函数外的变量
  $globvar++;
 echo "\$globvar is $globvar<br/>";
echo "当前函数为：".__FUNCTION__;
}
echo "当前行数：".__LINE__;
addit();

addit();
addit();
echo "当前文件名：".__FILE__;
echo "执行PHP解析的操作系统：".PHP_OS;
echo "当前PHP服务器的版本：".PHP_VERSION;
echo "<br/>";
echo "系统目录分隔符：".DIRECTORY_SEPARATOR."<br/>";
echo "系统环境变量的目录列表分隔符：".PATH_SEPARATOR."<br/>";
echo "圆周率：".M_PI;
?>
