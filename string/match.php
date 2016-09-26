<?php
   $str="abc234kgl432nrcdc474mbld352ff";
   $p ="/c(\d{3})/";
 // preg_match($p,$str,$matches,PREG_OFFSET_CAPTURE );//数组包含匹配的字符串的和偏移，不再包含子模式
    //print_r($matches);//Array ( [0] => Array ( [0] => c234 [1] => 2 ) )
  preg_match_all($p,$str,$matches,PREG_OFFSET_CAPTURE );
 print_r($matches);
?>
