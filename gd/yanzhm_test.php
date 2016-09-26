<?php
session_start(); //开启SESSION
  require_once("yanzhm.php");
 $yzhm = new yanzhm(80,40);
 $yzhm->generateImage();
$_SESSION["validcode"]=$yzhm->getCheckCode(); //将对应的字符串存入会话中
?>
