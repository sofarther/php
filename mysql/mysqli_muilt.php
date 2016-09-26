<?php
$query="select stu_id,stu_name,class,math,english,history from student;";
$query.="select * from class;";
$query.="select * from schedule";
$mysqli = new mysqli('localhost','root','','school');
if(mysqli_connect_errno()){
 echo '连接失败： '.mysqli_connect_error();
 exit();
}
if($mysqli->multi_query($query)){
do
{
   if($res = $mysqli->store_result()){
     echo '<table width="400px" align="center" border="1px" cellspacing="0" cellpadding="0">';
  $field = $res->fetch_field();
  echo '<caption>'. $field->table.'</caption';
  echo '<tr><td>'.$field->name.'</td>';
  while($field=$res->fetch_field())
   echo '<td>'.$field->name.'</td>';
 echo'</tr>';
  while( $row=$res->fetch_row()){
  echo "<tr>";
 foreach($row as $data) echo '<td>'.$data.'</td>';
echo '</tr>';
}
 echo '</table>';
$res->close();
}
if($mysqli->more_results()){
   $mysqli->next_result();
}
else break;
}while(1);

}
$mysqli->close();
?>
