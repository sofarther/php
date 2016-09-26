<?php
  $mysqli = new mysqli('localhost','root','','tmp');
 if(mysqli_connect_errno()){
  echo "连接失败：".mysqli_connect_error();
 exit();
}
$mysqli->autocommit(0); //暂时关闭MySQL事务机制的自动提交模式
$success =TRUE;
$price = 8000;
$result = $mysqli->query("Update account set cash=cash-$price where name ='UserA'");
if(!$result or $mysqli->affected_rows!=1){ $success=FALSE;}
$result =$mysqli->query("Update account set cash=cash+$price where name='UserB'");
if(!$result or $mysqli->affected_rows!=1){
  $success =FALSE;
}
if($success){
  $mysqli->commit();
 echo "转帐成功";
}
else {
  $mysqli->rollback();
 echo "转帐失败";
}
$mysqli->autocommit(1);
$mysqli->close();
?>
