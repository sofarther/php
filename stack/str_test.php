<?php
  //$str ="3*4+5*10-2";
 // $res=preg_replace("/(.*)/e","\\1",$str);
  //echo $res; //可行
  //使用eval()字符串为一个PHP代码语句，所以要有; 且需使用return返回结果。否则
  //返回null
  $str ="return 3*4+5*10-2;";
  echo eval($str);
?>
