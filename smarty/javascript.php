<?php
  require_once "smarty_conf.inc.php";
  $tpl->assign("msg","Helloworld");
  $tpl->display("javascript.tpl");
?>
