<?php
 //echo "php".DIRECTORY_SEPARATOR."dir_function.php";
/*
  $path = "/home/sofar/public_html/php/dir_function.php";
  echo basename($path);
  echo "<br/>";
  echo basename($path,".php");
 echo "<br/>";
 echo dirname($path); //当为相对路径时返回父目录的相对路径
echo "<br/>";
$path_parts = pathinfo($path);
echo $path_parts['basename']."<br/>";
echo $path_parts['dirname']."<br/>";
echo $path_parts['extension']."<br/>";
echo "绝对路径：".realpath("php/date.php")."<br/>";
*/
//遍历目录中的文件和子目录
function dir_read($dirname){
$num=0;
//$dirname="php";
$dir_handle =opendir($dirname);
echo '<table border="0" align="center" width="500px"cellspacing="0" cellspadding="0"> ';
echo '<caption><h2>目录'.$dirname.'的内容</h2></caption>';
echo '<tr align="left" bgcolor="#cccccc"  ><th>文件名</th><th>文件大小</th>';
echo '<th>文件类型</th><th>修改时间</th></tr>';
while($file=readdir($dir_handle)){
    $dirFile=$dirname."/".$file;
     if($num++%2==0) $bgcolor="#ffffff";
    else $bgcolor="#cccccc";
 echo '<tr bgcolor="'.$bgcolor.'">';
 echo "<td>".$file."</td>"."<td>".filesize($dirFile)."</td>"."<td>".filetype($dirFile)."</td>"."<td>".date("M j, Y",filemtime($dirFile))."</td>";
 echo "</tr>";
}
echo "</table>";
closedir($dir_handle);
echo "在<b>".$dirname."</b>目录下的子目录和文件共有<b>".$num."</b>个<br/>";
}
//dir_read("phpmyadmin");
//统计目录的大小
function dirSize($dirname){
  $size=0;
 if($dir_handle=opendir($dirname)){
     while($file=readdir($dir_handle)){
   if($file!="." && $file!=".."){
        $dirFile=$dirname."/".$file;  
       if(is_dir($dirFile)){
        $size+=dirSize($dirFile);
}
   if(is_file($dirFile)) $size += filesize($dirFile);
}
}
 closedir($dir_handle);
 return $size;
}

}
$dir_size = dirSize("phpmyadmin");
 echo "phpmyadmin目录大小为：" .round($dir_size/pow(1024,2),2)." MB<br/>";
//删除目录
function dirDel($dirname){
   if(file_exists($dirname)){
         if($dir_handle=opendir($dirname)){
           while($file = readdir($dir_handle)){
              if($file!="." && $file!=".."){
                $dirFile=$dirname."/".$file;
                if(is_dir($dirFile)) dirDel($dirFile);
                if(is_file($dirFile)) unlink($dirFile);
}
}
  closedir($dir_handle);
  rmdir($dirname);
}
}
}
//dirDel("php");
function copyDir($dirSrc,$dirDes){
   if(is_file($dirDes)){ echo "目标不是目录，无法创建和复制"; return;}
   if(!file_exists($dirDes)){ mkdir($dirDes);}
 if($dir_handle=opendir($dirSrc)){
    while($file=readdir($dir_handle)){
   if($file!="." && $file!=".."){
       $dirFile=$dirSrc."/".$file;
      $desFile=$dirDes."/".$file;
    if(is_dir($dirFile)) copyDir($dirFile,$desFile);
   if(is_file($dirFile)) copy($dirFile,$desFile);
}
} 
 closedir($dir_handle);
}
}
//copyDir("php","php2");

//更改脚本执行的当前工作目录
echo "<br/>当前的工作目录：". getcwd()."<br/>"; // /home/sofar/public_html/php/filesystem
chdir("..");
echo "更改当前工作目录后的当前目录：".getcwd()."<br/>";// /home/sofar/public_html/php
/*
echo "<pre>";
//当在网页中显示PHP代码，只能使用highlingth_string()进行格式转换，才能显示
//当date.php为GBK编码时，网页会将编码改为GBK，因此以上的中文会乱码
echo highlight_string(file_get_contents("date.php") ,true);
echo "</pre>";
*/
//递归创建多级目录
/*
 if(mkdir("file/file2/file3",0777,true)){
   echo "创建目录成功";

} else{
   echo "创建目录失败";
 }
*/
  //获取指定目录的所有文件
  $filearr = scandir("filesystem");
  echo "<pre>";
   print_r($filearr);
 echo "</pre>";
?>
