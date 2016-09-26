<?php
header("Content-type:text/html;charset=utf-8");
require("class_downlode.php");
require("class_Operation.php");
require("class_Dir.php");
require("class_Files.php");
session_start();

 if(isset($_GET['op']) && isset($_GET['name'])){
  
    switch($_GET['op']){
 case 0:
/*
 echo "<h3>copy ".$_GET['name'].'</h3><hr>';
echo '<form action="filesystem.php" method="post"> ';
echo '源&nbsp;&nbsp;路径：&nbsp;&nbsp;<u><b> '.$_GET['name'].'</b></u><br/>';
echo '目标路径：&nbsp;&nbsp;<input type="text" name="cpdes"><br/> ';
echo '<input type="submit" name="sub" value="确定">&nbsp;&nbsp;';
echo '<input type="hidden" name="op" value='.$_GET['op'].'>';
 echo '<input type="hidden" name="filename" value='.$_GET['name'].">";
echo '<input type="reset" value="重置">';
echo '</form>';
*/
  $_SESSION['copyname'] =$_GET['name'];
$operator = new Operation(dirname($_GET['name']));
$operator->opt_showdes();
break;
 case 1 :
 echo "<h3>rename ".filetype($_GET['name'])."</h3><hr>";
 echo '<form action="filesystem.php" method="post">';
 echo '原文件名：&nbsp;&nbsp;<u><b>'.basename($_GET['name']).'</b></u><br/>';
 echo '新文件名：&nbsp;&nbsp;<input type="text" name="rname"<br/> ';
echo '<input type="hidden" name="op" value='.$_GET['op'].'>';
 echo '<input type="hidden" name="filename" value='.$_GET['name'].">";
 echo '<input type="submit" name="sub" value="确定">&nbsp;&nbsp;';
echo '<input type="reset" value="重置">';
echo "</form>";
break;
 case 4: 
 echo "<h3>edit ".$_GET['name']."</h3><hr>";
 echo '<form action="filesystem.php" method="post">';
 echo '<textarea  name="content" rows="20" cols="50">'.file_get_contents($_GET['name'])."</textarea><br/>";
  echo '<input type="hidden" name="op" value='.$_GET['op'].'>';
 echo '<input type="hidden" name="filename" value='.$_GET['name'].">";
echo '<input type="submit" name="sub" value="确定">&nbsp;&nbsp;';
echo '<input type="reset" value="重置">';
echo "</form>";
break;
case 5:
 $down = new Downlode($_GET['name']);
 $down->downfile();
break;

case 6:
 echo "<h3>Upload File</h3><hr>";
echo '<form action="filesystem.php" enctype="multipart/form-data" method="post">';
echo '<input type="file" name="myfile" style="width:120px; border : solid 1px black;"><font size="1px">（不大于1M）</font><br/>';
echo '<input type="hidden" name="MAX_FILE_SIZE" value="1000000">';
 echo '<input type="hidden" name="op" value='.$_GET['op'].'>';
 echo '<input type="hidden" name="filename" value='.$_GET['name'].">";
echo '<input type="submit" name="sub" value="确定">&nbsp;&nbsp;';
echo '<input type="reset" value="重置">';
echo "</form>";

break;

 case 7: 
   $operator =  new Operation($_GET['name']);
  $operator->opt_createdir(true);
     break;
 case 9:
$operator = new Operation($_GET['name']);
  $operator->opt_showdes();
   break;
case 3:
  $name =$_SESSION['copyname'];
  $operator = new Operation($name);
  $operator->opt_copy($_GET['name']);
  unset($_SESSION['copyname']);
//???Warning: Cannot modify header information - headers already sent by (output started at /home/sofar/public_html/php/filesystem/class_Dir.php:59) 
  header("Location:filesystem.php");
   exit();
  break;
}
}
?>
