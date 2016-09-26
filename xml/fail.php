<?php
 header("Content-type:text/html;charset=utf-8");
  if(isset($_GET['opt'])){
   if($_GET['opt'] == "2"){
     echo "添加学生失败，返回<a href='addstu.php'>主界面</a>";
   }elseif($_GET['opt'] == "2"){
   echo "修改信息失败，返回<a href='updateStu.php?id={$_GET['id']}'>主界面</a>";
   }elseif($_GET['opt'] == "3"){
    echo  "删除失败，返回<a href='addstu.php'>主界面</a>";
   }
  }
?>
