<?php
  require('smarty_conf.inc.php');
//块函数,模板函数,调节器函数都采用插件的形式,只需要在Smarty的plugins目录下自己扩展就可以了,所以Smarty已经不用register_function register_block方法了
/*
$tpl->register_function('date_time','print_date');

function print_date($params){
  extract($params);
if(empty($format)){
  $format="%b %e, %Y  %H:%M:%S";
}
if(empty($datetime)){
 $datetime=time();
}
return strftime($format,$datetime);
}
*/

$tpl->display('cachelessTest.tpl');
?>
