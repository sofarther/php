<?php
  try{
   $dbp = new PDO('mysql:host=localhost;dbname=tmp','root','');
  $dbp->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $dbp->beginTransaction(); //开启一个事务
 $dbp->exec("update account set cash=cash+8000 where userID=1");
 $dbp->exec("update account set cash=cash-8000 where userID=2");
$dbp->commit();
} catch(PDOException $e){
  $dbp->rollBack();
  echo "失败：" . $e->getMessage();
}
?>
