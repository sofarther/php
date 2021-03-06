<?php
echo "PDO驱动程序：<br/>";
print_r(pdo_drivers());
echo "<br/>";
 $opt = array(PDO::ATTR_PERSISTENT=>TRUE); //设置持久连接选项
try{
     //$dbp = new PDO('mysql:host=localhost;dbname=school','root','',$opt );
     $dbp = new PDO('uri:file:///home/sofar/public_html/php/mysql/pdo.connect.ini','root','',$opt);
}catch(PDOException $e){
     echo "数据库连接失败：".$e->getMessage();
    exit;
}
/*
echo "\nPDO是否自动提交功能：".$dbp->getAttribute(PDO::ATTR_AUTOCOMMIT)."<br/>";
echo "\n当前PDO的错误处理的模式：".$dbp->getAttribute(PDO::ATTR_ERRMODE)."<br/>";
echo "\n表字段字符的大小写转换：".$dbp->getAttribute(PDO::ATTR_CASE)."<br/>";
echo "\n与连接状态相关的特有信息：".$dbp->getAttribute(PDO::ATTR_CONNECTION_STATUS)."<br/>";
echo "\n空字符串转换为SQL的null:".$dbp->getAttribute(PDO::ATTR_ORACLE_NULLS)."<br/>";
//echo "\n应用程序提前获取数据的大小：".$dbp->getAttribute(PDO::ATTR_PREFETCH)."<br/>";
echo "\n与数据库持久连接：".$dbp->getAttribute(PDO::ATTR_PERSISTENT)."<br/>";
echo "\n与数据库特有的服务器信息：".$dbp->getAttribute(PDO::ATTR_SERVER_INFO)."<br/>";
echo "\n数据库服务器的版本号信息：".$dbp->getAttribute(PDO::ATTR_SERVER_VERSION)."<br/>";
echo "\n数据库客户端版本号信息：".$dbp->getAttribute(PDO::ATTR_CLIENT_VERSION)."<br/>";
*/
$dbp->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//设置错误处理模式为抛出异常
//echo "\n当前PDO的错误处理模式：".$dbp->getAttribute(PDO::ATTR_ERRMODE)."<br/>";//0
//echo "PDO::ERRMODE_SILENT: ".PDO::ERRMODE_SILENT."<br/>";//0
$dbp->setAttribute(PDO::ATTR_ORACLE_NULLS,true);
echo "\n空字符串转换为SQL的null:".$dbp->getAttribute(PDO::ATTR_ORACLE_NULLS)."<br/>";
$update ="update student set stu_name='' where stu_id=10 ";
$affected = $dbp->exec($update);
if($affected){
  echo '数据表student中受到影响的行数为：'.$affected."<br/>";
} //else print_r($dbp->errorInfo());
$select ="select stu_id , stu_name,class,math,english,history from student limit 10";
try{
   $pdostmt = $dbp->query($select);
 echo "从表中获得".$pdostmt->rowCount()."条记录：<br/>";
/*
foreach($pdostmt as $row){
echo $row['stu_id']."\t";
if(is_null($row['stu_name'])) echo 'NULL';
else  echo $row['stu_name'] ."\t";
 echo $row['math']."\t";

if(is_null($row['english']))echo 'NULL\t';
else echo $row['english']."\t";
 echo $row['history']."<br/>";
echo $row[2]."<br/>";
}
*/

echo "<table width='400px' border='1px' align='center' cellspacing='0' cellpadding='0'>";
$field_info = $pdostmt->getColumnMeta(0);
echo "<caption>".$field_info['table']."</caption>";
echo "<tr>";
for($i=0; $i<$pdostmt->columnCount(); $i++){
   $field_info =$pdostmt->getColumnMeta($i);
   echo "<td>".$field_info['name']."</td>";
}
echo "</tr>";
while($row = $pdostmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
  foreach($row as $key=>$val){
    echo "<td>$val</td>";
  }
 echo "</tr>";
}
echo "</table>";
$passwd=md5(":password");

$sql='UPDATE `admin` SET `admin_name`=:password,`password`=:3 WHERE `admin_id` = :id';
 $pstmt =$dbp->prepare($sql);
 $pstmt->bindValue(":password","aaaa");

 $pstmt->bindValue(":3",$passwd);
$pstmt->bindValue(":id",0);
//不能绑定多余的非占位符数据
//$pstmt->bindValue(":name","ggg");
 echo $pstmt->execute();

}catch(PDOException $e){
//当错误模式设置为抛出异常后，当发生错误时会捕捉到该异常，并处理
  echo $e->getMessage();
 print_r($dbp->errorInfo());
}
?>
