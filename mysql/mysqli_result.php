<?php
 $mysqli = new mysqli("localhost","root","","school");
if(mysqli_connect_errno()){
  printf("连接失败： %s<br/>",mysqli_connect_error());
  exit();
}
$mysqli->query("set names utf8");
$result = $mysqli->query("select stu_id,stu_name,class,math,english from student");
//$result = $mysqli->query('select  * from ttt');  //当结果集为空时，也可以访问到列的信息
echo '<table width="400px" align="center" border="1px" cellspacing="0px" cellpadding="0px">';
echo "<tr><th>编号</th><th>姓名</th><th>班级</th><th>数学</th><th>英语</th></tr>";
while($row = $result->fetch_assoc()){
  echo "<tr>";
 foreach($row as $key =>$value){
 if(is_null($row[$key])) echo "<td>NULL</td>";
else
 echo "<td>".$row[$key]."</td>";

}
echo "</tr>";
}
echo "</table>";
echo "<br/>";
echo "结果集的列的个数：".$result->field_count.'<br/>';
echo "默认当前列的指针位置：".$result->current_field.'<br/>';
echo "将指针移动到第二列；<br/>";
$result->field_seek(1);
echo "第二列的信息如下：<br/>";
$field_info = $result->fetch_field();
echo '列的名称：'.$field_info->name."<br/>";
echo '数据列来自数据表：'.$field_info->table."<br/>";
echo '该列最长字符串的长度：'.$field_info->max_length."<br/>";
/*
$field_info = $result->fetch_field();
echo '列的名称：'.$field_info->name."<br/>";
echo '数据列来自数据表：'.$field_info->table."<br/>";
echo '该列最长字符串的长度：'.$field_info->max_length."<br/>";
*/
$fields =$result->fetch_fields();
print_r($fields);
echo '<br/>';
echo $fields[1]->name;
$result->close();
$mysqli->close();
?>
