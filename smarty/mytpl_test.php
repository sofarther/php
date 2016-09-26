<?php
require "myTpl.php";
$mysqli = new mysqli("localhost","root","","school");
if($res=$mysqli->query("select stu_name,class,math,english,history from student")){
  while($row = $res->fetch_assoc()){
    $stus[] =$row;
}
 $rowNum = $res->num_rows;
$res->close();
}
$tpl= new MyTpl();
$tpl->assign("title","自定义模板引擎示例");
$tpl->assign("tableName","学生成绩表");
$tpl->assign("author","sofar");
$tpl->assign("stus",$stus);
$tpl->assign("rowNum",$rowNum);
$tpl->display("main.tpl");

?>
