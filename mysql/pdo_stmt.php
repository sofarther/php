<?php
 try{  
$dbp = new PDO('mysql:host=localhost;dbname=school','root','');

} catch(PDOException $e){
  echo  $e->getMessage();
  exit;
}
/*
//使用？占位符
$query = "insert into student(stu_name,class,math,english,history) values(?,?,?,?,?)";
$pstmt = $dbp->prepare($query);
$name = 'lmfg';
$class=23;
$math=85;
$english=77;
$history=80;
$pstmt->bindParam(1,$name);
$pstmt->bindParam(2,$class);
$pstmt->bindParam(3,$math);
$pstmt->bindParam(4,$english);
$pstmt->bindParam(5,$history);
if($pstmt->execute()) echo "插入数据成功";
$name ="cnbm";
$class = 33;
$math=88;
$english=92;
$history=70;
if($pstmt->execute()) echo "插入数据成功";
//使用命名占位符
$query1 = "insert into student(stu_name,class,math) values(:name,:class,:math)";
$pstmt1 = $dbp->prepare($query1);
$name = 'lmfg';
$class=23;
$math=85;
$english=77;
$history=80;
$pstmt->bindParam(':name',$name);
$pstmt->bindParam(':class',$class);
$pstmt->bindParam(':math',$math);
if($pstmt->execute()) echo "插入数据成功";
//该形式只适用于命名参数
$pstmt1->execute(array(":name"=>'qasd',":class"=>21,":math"=>78));
*/
//结果集的读取:PDOStatement 为结果集对象

$pstmt2 = $dbp->query('select stu_name,class,math,english,history from student');
$col = $pstmt2->getColumnMeta(0);
echo '<table align="center" width="500px" border="1px" cellspacing="0px"> ';
echo '<caption><h3>'.$col['table'].'</h3></caption>';
//echo '<tr><th>name</th><th>class</th><th>math</th><th>english</th><th>history</th></tr>';
echo "<tr>";
for($i=0; $i<$pstmt2->columnCount(); $i++)
echo '<th>'.$pstmt2->getColumnMeta($i)['name'].'</th>';
echo "</tr>";
while($row= $pstmt2->fetch(PDO::FETCH_ASSOC)){
  echo "<tr>";
 foreach($row as $col =>$value)
 echo "<td>".$row[$col]."</td>";
echo "</tr>";
}
echo "</table>";

//PDOStatement 当为预处理对象时，使用PDOStatement对象执行查询，返回的结果集保存在该PDOStatement对象中
$pstmt3 = $dbp->prepare("select stu_name,class,math,english,history from student");
$pstmt3->execute();
/*
$allRows = $pstmt3->fetchAll(PDO::FETCH_NUM);
foreach($allRows as $row){
echo "<tr>";
  foreach($row as $col)
 echo   "<td>".$col."</td>";
echo "</tr>";
}
}
echo "</table>";
//使用fetchAll获取指定列的所有记录数据
$pstmt3->execute(); //需要再次执行，否则为空
$cRows = $pstmt3->fetchAll(PDO::FETCH_COLUMN,0); //从结果集中获取第一列的所有数据
echo '所有的名字：<br/>';
print_r($cRows);
*/
//将结果绑定到变量
$pstmt3->bindColumn(1,$name); //使用列位置偏移量绑定
$pstmt3->bindColumn(2,$class);
$pstmt3->bindColumn('math',$math);
$pstmt3->bindColumn('english',$english);
$pstmt3->bindColumn('history',$history);
while($row = $pstmt3->fetch(PDO::FETCH_BOUND)){
  echo $name."\t".$class."\t".$math."\t".$math."\t".$english."\t".$history."<br/>";
//此时记录指针移动到下一行
echo $pstmt3->fetchColumn(1)."<br/>"; // 返回当前行第二列的值，并移动记录指针到下一行
}
//print_r($pstmt3->getColumnMeta(1));
?>
