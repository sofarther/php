<?php
require_once "Person.class.php";
  session_start();
  echo "name: ".$_SESSION['username']." password: ".$_SESSION['passwd']."<br/>";
 echo "Session ID : ".session_id()."<br/>";// jnagln7tqvmjla3qat1a5brd50
echo "Session name: ".session_name()."<br/>"; //PHPSESSID
echo $_COOKIE[session_name()]."<br/>"; //jnagln7tqvmjla3qat1a5brd50

  print_r($_SESSION['arr']);
//获取对象，需要引用对象类的定义文件
  $p = $_SESSION['person'];
 $p->say();
 $_SESSION= array();
 if(isset($_COOKIE[session_name()])) setcookie(session_name(),"",time()-42000,'/');
session_destroy();
?>
