<?php
//使用http://localhost/php/static/pathinfo-sofar-ss.html访问
  echo $_GET['name']."&nbsp;".$_GET['passwd'];
echo '<br/>';
//使用重写机制后，PATH_INFO为重写后的地址的解析的内容
echo  $_SERVER['PATH_INFO'];
?>
