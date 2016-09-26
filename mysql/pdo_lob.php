<?php
  $dbp = new PDO("mysql:host=localhost;dbname=school" ,'root','');
//id=sofar,_song,zhss,zss,image/jpeg
 $stmt=$dbp->prepare("select stu_name,image from images where stu_name=? ");
 $stmt->execute(array($_GET['id']));
while( list($type,$lob) = $stmt->fetch()){
//$stmt->bindColumn(1,$type);
//$stmt->bindColumn(2,$lob,PDO::PARAM_LOB);
//$stmt->fetch(PDO::FETCH_BOUND);
if(!is_null($lob)){
 header("Content-Type:image/jpg");
//var_dump($lob);

//fpassthru($lob);
echo $lob;
}
}
?>
