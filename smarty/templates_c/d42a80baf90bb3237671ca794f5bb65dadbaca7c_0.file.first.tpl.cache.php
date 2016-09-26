<?php /* Smarty version 3.1.24, created on 2015-06-16 08:55:53
         compiled from "./templates/first.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1284208045557f7419cdd693_02902490%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd42a80baf90bb3237671ca794f5bb65dadbaca7c' => 
    array (
      0 => './templates/first.tpl',
      1 => 1433905995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1284208045557f7419cdd693_02902490',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557f7419d52c24_94082432',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557f7419d52c24_94082432')) {
function content_557f7419d52c24_94082432 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1284208045557f7419cdd693_02902490';
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<!--使用smarty模板，开始符、结束符 与变量之间不能有空格-->
<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
  </title>
</head>
<body>
 <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</body>
</html>
<?php }
}
?>