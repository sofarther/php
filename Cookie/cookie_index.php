<?php
  if($_COOKIE['islogin']){
    echo "你好：".$_COOKIE['username'].'&nbsp;&nbsp;&nbsp;';
  //在超链接GET请求，POST请求， Location中，指定提交或重定向页面时，/表示服务器虚拟主机目录
//可以使用/开头来表示相对于虚拟主机文档根目录的绝对路径
   echo '<a href="/php/Cookie/cookie_login.php?action=logout">退出</a>';
   echo $_COOKIE['msg'];
} else {
  header("Location: /php/Cookie/cookie_login.php");
}
?>
<html>
 <head>
 <meta http-equiv="Content-type" content="text/html;charset=utf-8">
 
<title>网站首页面</title>
</head>
<body>
<!--但不能在require include以及文件目录操作中使用/来表示服务器的文档根目录，/表示文件系统的根目录-->
  <?php //require("/php/filesystem/filesystem.php"); 
  ?>
</body>
</html>

