<?php
 function getImage($sid){
   $dbp = new PDO("mysql:host=localhost;dbname=school" ,'root','');
 $stmt=$dbp->prepare("select image from images where id=?");
$stmt->execute(array($sid));
list($image) = $stmt->fetch();
if(!is_null($image)){
  header("Content-type:image/jpg");
 echo $image;
}  else echo"NULL";
}
?>
