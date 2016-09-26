<?php
 header("content-type:text/html;charset=utf-8");
require("pdo_lob_func.php");
try{
  $dbp = new PDO('mysql:host=localhost;dbname=school','root','');
}catch (PDOException $e){
  echo "连接数据库失败：".$e->getMessage();
 exit;
}
$query = "select * from student";
$pstmt = $dbp->prepare($query);
$pstmt->execute();
$pstmt->bindColumn(1,$sid);
$pstmt->bindColumn(2,$sname);
$pstmt->bindColumn(4,$math);
$pstmt->bindColumn(5,$english);
$pstmt->bindColumn(6,$history);
$pstmt->bindColumn(7,$lob);
echo '<table align="center" width="800px" border="1px" cellspacing="0px"> ';
$col = $pstmt->getColumnMeta(0);
echo "<caption>".$col['table']."</caption>";
echo "<tr>";
for($i=0;$i<$pstmt->columnCount();$i++)
echo "<td>".$pstmt->getColumnMeta($i)['name']."</td>";
echo "</tr>";
while($pstmt->fetch(PDO::FETCH_BOUND)){
  echo "<tr>";
 echo "<td>".$sid."</td><td>".$sname."</td><td></td><td>".$math."</td><td>".$english."</td><td>".$history."</td>";
echo "<td>";
// require("pdo_lob.php?id=".$sid);
if(!is_null($lob))
echo '<a style=":hover img{width:200px; }" href=""><img src="pdo_lob.php?id='.$sname.'" width="30px" /></a>';

else echo "NULL";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
