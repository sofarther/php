<?php
//require_once 表示在引入之前，先检查是否引入该资源，而在该函数后，调用require，则仍会再次引入该资源
require_once "t.php";
require("t.php");
 $user =fopen("list.txt","r");
while($line=fgets($user,4096)){
  list($name,$sex,$age,$disp)=explode("|",$line);
 printf("name : %s <br/> ",$name);
 printf("sex :  %s <br/>",$sex);
 printf("age :  %s <br/>", $age);
}

 fclose($user);
?>
