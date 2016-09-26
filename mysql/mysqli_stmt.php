<?php
  $mysqli = new mysqli('localhost','root','','school');
 if(mysqli_connect_errno()){
  echo '连接失败：'.mysqli_connect_error();
  exit();
}
/*
$name = "cccc";
$class=23;
$math=76;
$english=85;
$history=77;
 $stmt = $mysqli->prepare('insert into student(stu_name,class,math,english,history) values(?,?,?,?,?)');
//echo var_dump($stmt);
 $stmt->bind_param('siiii', $name,$class,$math,$english,$history);
 $stmt->execute();
 echo '插入的行数：'.$stmt->affected_rows."<br/>";
 echo '自动增加的UID：'.$mysqli->insert_id.'<br/>';
 $name = 'mmmm';
 $class=32;
 $math = 82;
 $english = 79;
 $history = 80;
 $stmt->execute();
echo '插入的行数：'.$stmt->affected_rows."<br/>";
echo '自动增加的UID：'.$mysqli->insert_id."<br/>";
*/
$query = 'select stu_id,stu_name,class,math,english,history from student where class = ? LIMIT 0,2'; //只输出前两个
if($stmt = $mysqli->prepare($query)){
$class= 31;
echo "需要绑定的参数的个数：".$stmt->param_count."<br/>";
$stmt->bind_param('i',$class); //绑定参数只能是变量形式，不能是常量形式
$stmt->execute();
$res= $stmt->store_result();
$stmt->bind_result($stu_id,$stu_name,$classid,$math,$eng,$his);
echo "Class NO".$class.":<br/>";
echo "记录总数：".$stmt->num_rows."行<br/>";
//echo var_dump($res);//$res 为布尔型 true，并不是结果集mysqli_result类型
//故以下代码失败，即不能使用结果集类型访问结果集
/*
while($row = $res->fetch_row()){
  foreach ($row as $data)
   echo $data. ' &nbsp;';
echo '<br/>';
}
*/
$fields = $stmt->result_metadata();
//echo var_dump($fields);
$field =$fields->fetch_field();
echo "列名称：".$field->name."<br/>";
echo "列来自的数据表：".$field->table."<br/>";
/* 
while($row =$fields->fetch_row()){ //false
 echo var_dump($row);
  foreach($row as $data) echo $data. " &nbsp;";
echo "<br/>";
}
*/
while($stmt->fetch()){
  printf("%d %s %d <br/>",$stu_id,$stu_name,$classid);
}
$class =33;
echo "Class NO".$class." :<br/>";
$stmt->execute();
echo "记录总数：".$stmt->num_rows."行<br/>";
while($stmt->fetch()){
 printf("%d %s %d <br/>",$stu_id,$stu_name,$classid);
}
$stmt->close();
}
$mysqli->close();
?>
