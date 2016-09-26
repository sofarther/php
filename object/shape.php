<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>计算多边形面积和周长</title>
<body>
<?php
error_reporting(E_ALL&~(E_NOTICE|E_WARNING));
 require("class_Form.php");
  function __autoload($className){
   include("class_".ucfirst($className).".php");
}
?>
<center>
<a href="shape.php?action=1">计算矩形面积和周长</a>
<a href="shape.php?action=2">计算圆的面积和周长</a>
<a href="shape.php?action=3">计算三角形的面积和周长</a>
</center>
<?php
 switch($_REQUEST["action"]){
  case 1: 
          $form = new Form("矩形",$_REQUEST,"shape.php");
           echo $form;
           break;
 case 2: $form = new Form("圆",$_REQUEST,"shape.php");
          echo $form;
         break;
 case 3: $form = new Form("三角形",$_REQUEST,"shape.php");
       echo $form;
       break;
default : echo "选择一个形状";
         break;
}
if(isset($_REQUEST["act"])){
 
switch($_REQUEST["action"]){
  case 1 : $shape = new Rect($_REQUEST["width"],$_REQUEST["height"]);
          break;
  case 2 : $shape = new Circle($_REQUEST["radius"]);
         break;
 case 3 : $shape = new Triangle($_REQUEST["side1"],$_REQUEST["side2"],$_REQUEST["side3"]);
     break; 
}
}
if(isset($shape)){
  echo "面积： "  .$shape->area()."<br/>";
 echo "周长： " .$shape->perimeter()."<br/>";
}
?>
</body>
</head>
</html>
