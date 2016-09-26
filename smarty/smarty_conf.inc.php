<?php
  include "./libs/Smarty.class.php";
//存放Smarty指定的目录和文件
  define('WEB_CONF','/home/sofar/WEB_CONF');
 $tpl = new Smarty();
//修改Smarty默认的指定的目录和文件
//一般指定到非WEB服务器的根目录的目录
//以下两个目录未修改：模板目录和编译后的模板目录
// $tpl->templates_dir = WEB_CONF."/templates/"; //Web服务器用户有读权限
// $tpl->compile_dir = WEB_CONF."/templates_c/"; //Web服务器用户有写权限
$tpl->config_dir = WEB_CONF."/configs/"; //Web服务器用户有写权限
//$tpl->cache_dir = WEB_CONF."/cache/"; //Web服务器用户有写权限
//$tpl->caching=1;  //开启Smarty缓存模板功能
//$tpl->cache_lifetime=60*60; //Smarty缓存有效期为1小时
$tpl->left_delimiter= "<{"; //模板语言中的左结束符，默认为{
$tpl->right_delimiter="}>"; //模板语言中的右结束符，默认为}
?>
