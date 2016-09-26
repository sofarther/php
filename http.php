<html>
<head>
 <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>


<?php
echo $_SERVER['REMOTE_ADDR'];
if($_SERVER['REMOTE_ADDR'] == '192.168.13.100'){
    header('Location:info.php');
 }
//使用header()跳转则 $_SERVER['HTTP_REFERER'] 不存在
  //header("Location:super_var.php");s
//使用超链接来转到则$_SERVER['HTTP_REFERER'] 存在
 echo '<a href="super_var.php">链接到super_var.php</a>';

?>
</body>
</html>
