<?php
 //数组可以直接使用，不需要创建，自动转换为数组
  $arr['name']='sofar';
  $arr['age']=25;
 echo $arr['name'];
 echo $arr['age'];
  $str ='hello';
  $a =explode(',',$str);
  var_dump($a);//array(1) { [0]=> string(5) "hello" }
?>
