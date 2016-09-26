<html>
  <head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  </head> 
 <body>
 <?php
// 设置要报告PHP错误级别
  error_reporting(0);//关闭报告错误，系统不会调用默认的错误处理函数，但仍会触发错误，因此会调用自定义的错误处理函数
    function myerrorhandler($errno ,$errmsg,$errfile,$errline){
        echo "<font color='red'>".$errno."  error message : ".$errmsg."</font><br/>";
       //exit();
    }
 //对于E_WARNING级别的错误，设置为自定义错误处理函数
  set_error_handler('myerrorhandler',E_WARNING);
  $fp = fopen("tmp.txt","r");

//自定义错误，
//当参数不满足特定条件时，触发一个错误，并调用指定的错误处理函数
//这样可以对错误进行集中的处理
 set_error_handler('myerrorhandler',E_USER_ERROR); 
try{
$age =120;
 if($age>100){
  //触发一个错误，需指定用户的错误级别，默认E_USER_NOTICE
  trigger_error("age is invalid", E_USER_ERROR);
 }
 }catch(Exception  $e){
   echo "异常捕捉的只是throw 抛出的异常，并不会捕捉错误". $e->getMessage();
  }
 ?>
 </body>
</html>
