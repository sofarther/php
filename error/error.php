<?php
error_reporting(E_ALL & ~E_NOTICE);
if(!(mysql_connect("127.0.0.1","sofar",""))){
  echo "登录mysql失败！";
 echo "<br/>";
echo "错误日志已写入日志文件... ";
 //  error_log("用户sofar无法登录mysql数据库！");
  error_log("sofar无法登录数据库！\n",3,"/home/sofar/public_html/php/error/error.log");
 $r= error_log("sofar登录mysql失败",1,"794630531@qq.com");
 var_dump($r);
define_syslog_variables();
openlog("PHP5",LOG_PID,LOG_USER);
syslog(LOG_WARNING,"警告报告向syslog中发送的演示, 警告发送时间： ".date("Y/m/d H:i:s"));
closelog();
} else{
$mysqlinfo =mysql_get_server_info();
  echo "MySQL数据库版本：".$mysqlinfo;
}
?>
