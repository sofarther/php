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
<p >�Ƚ���Ҫ��Web��������Ϣ��</p>
<?php
 echo "�����û��ﵽ��ǰλ�õ�ҳ���URL��";
 echo  $_SERVER['HTTP_REFERER'] ;
 echo "<br/>";
 echo "�ͻ�IP��ַ��".$_SERVER['REMOTE_ADDR']."<br/>";
 echo "URL��·�����֣�".$_SERVER['REQUEST_URI']."<br/>";
 printf("�ͻ��Ĳ���ϵͳ���������Ϣ��%s<br/>",$_SERVER['HTTP_USER_AGENT']);
?>
<p>$_GET����ȫ�ֱ�����ȡʹ��GET�������ݵĲ�����</p>

<?php
echo "\$var1=";
echo $_GET['var1'];
echo "<br/>";
echo "\$var2=";
echo $_GET['var2'];
define("PI",3.1415926);
?>
<p> $_POST����ȫ�ֱ�����ȡpost������</p>

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
<p>������ڲ���ϵͳ����������:</p>
<?php
 foreach($_ENV as $var => $val){
  echo "$var => $val <br/>";
}
echo $_ENV['HOSTNAME'];
echo $_ENV['SHELL'];
?>
</body>
</html>
