<?php
  require "smarty_conf.inc.php";
 $tpl->assign('str',"this is 中文 a test about 'smarty' modify,\n there are some modify like 'functions' in 'php'.");
//$tpl->assign('date','');
$tpl->assign('num',12.764);
$tpl->assign('tags',null);
$tpl->assign('str2',"Blind woman gets new kidney from dad she hasn't seen in years.");
$tpl->assign("str3","this is a test about 'escape modifier' , there are <html> tags \"quote\" & and url like http://www.sofar.com?id=1. ");
$tpl->assign('url',"http://www.sofar.com?id=1");
$tpl->display('modify.tpl');
?>
