<?php
const MY_CONST="Hello";
define("CON","world");
//require_once "./libs/Smarty.class.php"; 
//$tpl =new Smarty();
require_once "smarty_conf.inc.php";

class T{
 public $tt="hello";
}
//当有页面缓存时，消除处理开销，直接请求缓存文件
/*
if(!$tpl->isCached('first.tpl',$_GET['id'])){
*/
$tpl->assign('title', 'Smarty Test');
$tpl->assign('content','<i><u>this is  first compile templates by smarty</u></i>');
$tpl->assign("t",new T());//分配对象变量
//$tpl->display('first.tpl',$_GET['id']);
/*
}
*/
//以__开头的预定以常量为PHP魔术常量，这些常量不能使用constant()来访问
//其他的常量为相应扩展库来提供，如M_PI由数学扩展库提供的，这些常量可以由constant()来获取
//当在Smarty模板中使用系统常量或自定义常量，在生成的PHP文件中使用constant()来获取常量值
//因此在$Smarty模板文件中不能访问魔术常量
//echo constant('__LINE__');

//清除缓存，强制创建缓存文件，及时更新更改
//$tpl->clearCache('first.tpl','2');
$tpl->clearAllCache();
 $tpl->display('first.tpl',$_GET['id']);
?>
