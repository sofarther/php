<?php
class Downlode{
 private $name;
 private $size;
function __construct($name){
 $this->name=$name;
 $this->size = filesize($name);
}
function downfile(){
 $extension =substr($this->name,strrpos($this->name,'.'));
/*
if($extension ===".php" ||$extension===".html"|| $extension ===".hml"|| $extension===".css"){
  header("Content-type:text/html");
 header('Content-disposition:attachment;filename="'.$this->name.'"');
 header('Content-length:'.$this->size);
 readfile($this->name);
}
else if($extension ===".jpg"||$extension ===".jpeg"){
  header("Content-type:image/jpg");
 header('Content-disposition:attachment;filename="'.$this->name.'"');
 header('Content-length:'.$this->size);
 readfile($this->name);
 }
else if($extension ===".gif"){
  header("Content-type:image/gif");
 header('Content-disposition:attachment;filename="'.$this->name.'"');
 header('Content-length:'.$this->size);
 readfile($this->name);
 }
else if($extension ===".bmp"||$extension === ".wap" || $extension ===".wbmp" ){
  header("Content-type:image/png");
 header('Content-disposition:attachment;filename="'.$this->name.'"');
 header('Content-length:'.$this->size);
 readfile($this->name);
 }
else if($extension ===".png"){
  header("Content-type:image/png");
 header('Content-disposition:attachment;filename="'.$this->name.'"');
 header('Content-length:'.$this->size);
 readfile($this->name);
 }
*/
 if($extension ===".php" ||$extension===".html"|| $extension ===".hml"|| $extension===".css"
    ||$extension ===".jpg"||$extension ===".jpeg"||$extension ===".gif"||$extension ===".png"
    ||$extension ===".bmp"||$extension === ".wap" || $extension ===".wbmp"){
    header("Content-type:application/octet-stream"); //表示的是返回的是文件
    header("Accept-Ranges:bytes"); //文件按字节返回
    header("Accept-Length:".$this->size);
    header("Content-disposition:attachment;filename=".$this->name);
   readfile($this->name); //将文件内容输出到浏览器，即实现下载，也可使用fread()、file_get_contents(),需使用echo 输出
  }
else {
 echo'<a href ="'.$this->name.'">下载文件： '.basename($this->name).'</a>?'; 
 }

}
}
?>
