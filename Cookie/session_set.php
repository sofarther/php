<?php
require_once "Person.class.php";
  session_start();
 $_SESSION['username']="sofar";
$_SESSION['passwd']="sofarther";
echo "Session ID: ".session_id()."<br/>";
echo "Session name: ".session_name()."<br/>";
echo $_COOKIE[session_name()]."<br/>";
echo $_SESSION['username']."<br/>";
//保存数组
$_SESSION['arr'] =array('hello','world','text',45);
//保存对象
 $p = new Person("sofar");
$_SESSION['person'] = $p;
?>
<a href="session_get.php?<?php echo SID ?> " target="_blank" >通过URL传递Session ID</a>
