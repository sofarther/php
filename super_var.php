<html>
<head>

<title>PHP Super Global Variable</title>
</head>
<body>
<?php

foreach($_SERVER as $var => $value){
 echo "$var => $value <br/>";
}

?>
<p >比较重要的Web服务器信息：</p>
<?php
 echo "引导用户达到当前位置的页面的URL：";
 echo  $_SERVER['HTTP_REFERER'] ;
 echo "<br/>";
 echo "客户IP地址：".$_SERVER['REMOTE_ADDR']."<br/>";
 echo "URL的路径部分：".$_SERVER['REQUEST_URI']."<br/>";
 printf("客户的操作系统和浏览器信息：%s<br/>",$_SERVER['HTTP_USER_AGENT']);
?>
<p>$_GET超级全局变量获取使用GET方法传递的参数：</p>

<?php
echo "\$var1=";
echo $_GET['var1'];
echo "<br/>";
echo "\$var2=";
echo $_GET['var2'];
define("PI",3.1415926);
?>
<p> $_POST超级全局变量获取post变量：</p>

<?php
  echo "\$email:" ;
  echo $_POST['email'];
 echo "<br/>";
echo "\$passwd:";
 echo $_POST['passwd'];
echo "<br/>";
print_r(urldecode($GLOBALS['HTTP_RAW_POST_DATA']));
echo "<br/>";
printf("circle area(r=2):%f<br/>",PI*2*2);
echo "<br/>";
$data =file_get_contents('php://input');
print_r(urldecode($data));
?>
<p>更多关于操作系统环境的内容:</p>
<?php
 foreach($_ENV as $var => $val){
  echo "$var => $val <br/>";
}
echo $_ENV['HOSTNAME'];
echo $_ENV['SHELL'];
?>
</body>
</html>
