<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>operator</title>
</head>
<body>
<?php
  $output=`ls -l`;
  echo "<pre> $output</pre>";
$a=0;
echo var_dump($a=="0");
echo" <br/>";
echo var_dump($a==="0");
$file_handle=fopen("tmp","w");
var_dump($file_handle);
echo "<br/>";
$dir_handle=opendir("/home/sofar/public_html/php");
var_dump($dir_handle);
echo "<br/>";
$link_mysql=mysql_connect("localhost","root","");
var_dump($link_mysql);
echo "<br/>";
$img_handle=imagecreate(100,50);
var_dump($img_handle);
echo "<br/>";
$xml_parser=xml_parser_create();
var_dump($xml_parser);
echo "<br/>";

include("first.php");
?> 
</body>
</html>
