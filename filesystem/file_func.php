<?php
/*
if(!file_exists("file")){
  mkdir("file");
}
*/  
$filename="first.txt";
/*
 $handle = fopen("first.txt" ,"w") or die("打开<b>".$filename."</b>失败！" );

 for($row=0; $row<10; $row++){
  fwrite($handle,$row."：使用fwrite函数写入文件\n");
  
}
for($i=0;$i<10;$i++){
 fputs($handle,$i.":使用fputs函数写入文件\n");
}
$data="共有10行数据\n";
for($j=0;$j<10;$j++){
  $data.=$j.":使用file_put_contents函数写入文件,不需要打开文件\n";
}
fclose($handle);
//不需要打开文件，即可读写文件
$test =file_get_contents($filename);
echo nl2br($test); //读取的文件内容包括换行符，但在网页中不能换行，可通过替换为<br/>
file_put_contents($filename,$data);
*/
print_r(file($filename));
echo "<br/>";
 readfile($filename);

//读取远程文件
$ycfile="http://www.mysite.com/index.html";
//$handle1=fopen("http://www.mysite.com/index.html","r") or die("访问<b>远程文件失败</b>");
//$contents=fread($handle1,filesize("http://www.mysite.com/index.html"));
/*
while(!feof($handle1)){
$contents =fgets($handle1);

echo $contents;
}
fclose($handle1);
*/
/*
$contents=file_get_contents($ycfile);
echo $contents;
$filename="file/char.txt";

$fp=fopen($filename,"w+") or die("打开<b>".$filename."</b>失败");
$str="asdfghjkl123457qwertyuiop";
for($row=1;$row<=10; $row++){
  fputs($fp,$str."\n",20);
}
fclose($fp);
$fp=fopen($filename,"r+") or die("打开<b>".$filename."</b>失败");
echo "打开文件时的指针位置：".ftell($fp)."<br/>";
echo fread($fp,10)."<br/>";
echo "读取10个字符后，指针位置：".ftell($fp)."<br/>";
fseek($fp,100,SEEK_CUR);
echo "在当前位置后移100个字符，当前位置：".ftell($fp)."<br/>";
echo "在当前位置后移100个字符：" .fread($fp,10)."<br/>";
echo "当前的字符：".fgetc($fp)."<br/>";
echo "当前位置：".ftell($fp)."<br/>";
fseek($fp,-10,SEEK_END);
echo fread($fp,10)."<br/>";
rewind($fp);
echo ftell($fp)."<br/>";
fclose($fp);
*/
/*
if(copy("file/first.txt", "file/second.txt")){
 echo "复制文件成功";
}
else echo "复制文件失败";
if(rename("file/second.txt", "file/tmp.txt")){
  echo "文件重命名成功";
}
else echo "文件重命名失败";

if(file_exists("file/tmp.txt")){
     if(unlink("file/tmp.txt")) echo "删除文件成功";
    else echo "删除文件失败";
}

$fp=fopen("file/char.txt","r+") or die("打开文件失败");
echo ftruncate($fp,40);
fclose($fp);
*/
//读取配置文件的键名/键值对信息
//以下输出：
/*
Array
(
    [dbname] => php
    [user] => root
    [passwd] => root
    [url] => localhost
)
*/
$arr = parse_ini_file("prop.ini");
echo "<pre>";
print_r($arr);
echo "</pre>";


?>
