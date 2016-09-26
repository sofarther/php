<?php
header("Content-type:text/html; charset=utf-8");
 $link = mysql_connect("localhost",'root','') or die("连接数据库失败：".mysql_error());
 echo '与MySQL服务器建立的连接成功：<br/>';
 echo "客户端API数据库的版本信息：". mysql_get_client_info();
 echo "<br/>";
 echo "与MySQL服务器的连接类型：".mysql_get_host_info();
 echo "<br/>";
 echo "通信协议的版本信息：".mysql_get_proto_info();
 echo "<br/>";
 echo "MySQL服务器的版本信息：".mysql_get_server_info();
 echo "<br/>";
 echo "客户端使用的默认的字符集：". mysql_client_encoding();
 echo "<br/>";
 echo "MySQL服务器的当前工作状态：". mysql_stat();
mysql_close($link);
?>
