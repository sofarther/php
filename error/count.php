<?php
  header("Content-type:text/html;charset=utf-8");
/*
  foreach($_SERVER as $key=>$value){
   echo $key."=".$value."<br/>";
  }

*/
/*
 $pattern='/(\d)\1/';
//在替换文本和匹配模式中，要使用\则需要4个\\\\:
 //字符串中的转义字符，先要经过PHP字符串转义，然后再根据所在的上下文，进行再次转义
 $s=preg_replace($pattern,"\\\\\\1\\\\","23558977");
 echo $s;
*/
 $text="Apri\l fools day is 04/01/2015\n";
  $text.="Last christmas was 12/14/2014\n";
  function handler($matches){
   //$matches[0]为整个匹配的结果，$matches[1]为匹配的结果的第一个子模式。。。
   //返回替换的内容
  return $matches[1].($matches[2]+1);
  }
  //echo preg_replace_callback("/(\d{2}\/\d{2}\/)(\d{4})/",'handler',$text);

   echo preg_replace("/\\\\/",'/',$text);
  //variables_order = "GPCS"
  //分别表示GET、POST、COOKIE、SERVER，没有ENV超级变量，所以$_ENV访问为空
  echo  'My username is '  . $_ENV [ "USER" ] .  '!' ;
?>
