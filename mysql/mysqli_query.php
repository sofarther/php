<?php
$insert = "insert into student(stu_name,class,math,english,history)
        values('kiu',22,94,83,79),
        ('rvf',32,75,64,77),
        ('ran',21,88,80,91)";
$update = "update schedule set math='zxcv' where stu_name='zss'";
$del = "delete from student  where stu_name='rbs' or stu_name='mjl'";
$mysqli = new mysqli("localhost","root","");
if(mysqli_connect_errno()){
 printf("连接失败： %s<br/>",mysqli_connect_error());
 exit();
}
$mysqli->select_db('school');
if($mysqli->real_query($insert)){
  echo "改变的记录数： ".$mysqli->affected_rows."<br/>";
 echo "新插入的ID值： ".$mysqli->insert_id."<br/>";
echo "clomun Count : ". $mysqli->field_count."<br/>";
}
if($mysqli->real_query($update)){
  echo "改变的记录数： ".$mysqli->affected_rows."<br/>";
  echo "clomun Count : ". $mysqli->field_count."<br/>";
}
if($mysqli->real_query($del)){
  echo "改变的记录数： ".$mysqli->affected_rows."<br/>";
 echo "clomun Count : ". $mysqli->field_count."<br/>";
}
?>
