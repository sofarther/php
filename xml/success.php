<?php
header("Content-type:text/html;charset=utf-8");
  if(isset($_GET['opt'])){
   if($_GET['opt'] == "1"){
     echo "添加学生成功，返回<a href='main.php'>主界面</a>";
   }elseif($_GET['opt'] == "2"){
   echo "修改信息成功，返回<a href='main.php'>主界面</a>";
   }elseif($_GET['opt'] =="3"){
echo "删除成功，返回<a href='main.php'>主界面</a>";
  }
  }
?>
