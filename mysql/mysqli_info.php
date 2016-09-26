<?php
 $mysqli = new mysqli("localhost","root","","school");
 if(mysqli_connect_errno()){
    printf("连接失败：%s<br/>",mysqli_connect_error());
   exit();
}
printf("当前数据库的字符集： %s<br/>",$mysqli->character_set_name());
printf("客户端库的版本： %s <br/>",$mysqli->get_client_info());
printf("服务器版本： %d<br/>",$mysqli->server_version);
printf("服务器版本： %s <br/>", $mysqli->server_info);
printf("主机信息： %s<br/>",$mysqli->host_info);
$mysqli->close();
?>
