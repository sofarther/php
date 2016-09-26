<?php
include "smarty_conf.inc.php";
$arr =array(array('name'=>'sofar','math'=>87,'english'=>78,'history'=>88),
   array('name'=>'zhss','math'=>66,'english'=>77,'history'=>88),
  array('name'=>'sofarther','math'=>79,'english'=>90 ,'history'=>81));
$arr1 =array(array('sofar',87,78,88),
   array('zhss',66,77,88),
  array('sofarther',79,90 ,81));
$tpl->assign('students',$arr1);
$tpl->assign('t',$arr);
define('MY_CONST_VAL','hello');
$tpl->assign('num1',34);
$tpl->assign('num2',22);
$tpl->display('section.tpl');

?>
