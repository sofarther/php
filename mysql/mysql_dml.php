<?php
require_once('mysql.class.php');
/*
 $link = mysql_connect('localhost','root','') or die("连接失败：".mysql_error());
 mysql_select_db('school') or die("不能选定数据库：".mysql_error());
 $insert = 'insert into schedule values("sofar","nvm","lfoe","alfg"),
            ("zss","rlnd","mblg","slrh"),
            ("zhss","btld","pqlf","dlgr")
';
 $result = mysql_query($insert);
 if($result && mysql_affected_rows()>0){
   echo "数据记录插入的数据成功，最后一条插入的记录ID：".mysql_insert_id()."<br/>";
}
 else {echo "插入数据失败：, 错误号： ".mysql_errno()." 错误原因：".mysql_error()."<br/>";
}
$result1 =mysql_query('update schedule set math="mskg" where english="vcx"');
 if($result1 && mysql_affected_rows()>0){
   echo "数据记录修改成功！<br/>";
}
else {
  echo "修改数据失败，错误号：".mysql_errno()." 错误原因：".mysql_error()."<br/>";
}
$result2 = mysql_query("delete from schedule where history='cxz'");
if($result2 && mysql_affected_rows()>0){
 echo "数据记录删除成功！<br/>";
}
else echo "删除数据失败， 错误号为：".mysql_errno()."错误原因：".mysql_error()."<br/>";
mysql_close($link);
*/
$conn= mysql_connect('localhost','root' ,'') or die("无法连接到服务器：".mysql_error()) ;
mysql_select_db('school') or die("选择数据库失败：".mysql_error());
$sql = ' select stu_id, stu_name, class , math,english,history from student';
$my = new MysqlTest();
$my->closeConnect();
//需指定连接参数，否则会默认关闭MysqlTest中的连接
$res = mysql_query($sql,$conn);
$row = mysql_fetch_assoc($res);
$rcount=mysql_num_rows($res);
$ccount=mysql_num_fields($res);
$cols = array_keys($row);
echo '<table align="center" border="1px" width="400px" cellspacing="0px" cellpadding="0px">';
echo '<tr>';
for($i=0;$i<$ccount;$i++)
echo "<th>{$cols[$i]}</th>"; //可以在字符串中使用{}包括数组或对象属性，PHP可以识别
echo '</tr>';
do{
 echo '<tr>';
foreach($row as $key =>$val){
  echo '<td>'.$val.'</td>';
}
echo '</tr>';
} while($row = mysql_fetch_assoc($res));

mysql_free_result($res);
mysql_close($conn);
?>
