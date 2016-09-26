<?php
/*
  echo filetype('/etc/passwd');
  echo "<br/>";
  echo filetype('/initrd.img');
  echo "<br/>";
  echo filetype('/etc/');
  echo "<br/>";
  echo filetype('/dev/sda1');
 echo "<br/>";
 echo filetype('/dev/tty0');

*/
 function getFilePro($filename){
   if(!file_exists($filename)){
     echo $filename."不存在"."<br/>";
     return;
}
 if(is_file($filename)){
    echo $filename."是普通文件<br/>";
}
 if(is_dir($filename)){
   echo $filename."是目录文件<br/>";
}
 echo "文件型态：".getFileType($filename)."<br/>";
 echo "文件大小：".getFileSize(filesize($filename))."<br/>";
if(is_readable($filename)){
  echo $filename."可读<br/>";
}
 if(is_writable($filename)){
  echo $filename."可写<br/>";
}
if(is_executable($filename)){
 echo $filename."可执行<br/>";
}
//filectime表示change time:即文件的更改时间，不仅包括文件内容的修改，还包括文件的所有者、组、权限的修改
echo  $filename."更改时间：".date("Y年m月j日",filectime($filename))."<br/>";
echo $filename."修改时间：".date("Y年m月j日",filemtime($filename))."<br/>";
echo $filename."上次访问时间：".date("Y年m月j日",fileatime($filename))."<br/>";
}
function getFileType($filename){
 $type="";
  switch(filetype($filename)){
    case 'file' : $type= "普通文件"; break;
   case 'dir' :  $type="目录文件"; break;
  case 'link' : $type="链接文件"; break;
 case 'char' :  $type="字符设备文件"; break;
 case 'block' : $type="块设备文件"; break;
 case 'fifo' :  $type="管道文件"; break;
 case 'unknown' : $type= "未知类型"; break;
 default : $type="没有检测到类型"; 
}
return $type;
}
 function getFileSize($byte){
   if($byte>=pow(2,40)){
     $return = round($byte/pow(1024,4),2);
     $suffix ="TB";
}
  if($byte >= pow(2,30)){
   $return = round($byte/pow(1024,3),2);
   $suffix="GB";
}
 if($byte >=pow(2,20)){
   $return = round($byte/pow(1024,2),2);
  $suffix="MB";
}
 if($byte >=pow(2,10)){
  $return = round($byte/pow(1024,1),2);
   $suffix="KB";
} else {
   $return=$byte;
  $suffix="Byte";
}
return $return." ".$suffix;
}
getFilePro("filesystem.php");
echo "<br/>";
$filePro =stat("filetype.php");
print_r(array_slice($filePro,13));
?>
