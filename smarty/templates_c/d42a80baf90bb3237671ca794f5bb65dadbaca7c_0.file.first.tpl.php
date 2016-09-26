<?php /* Smarty version 3.1.24, created on 2015-11-20 11:31:59
         compiled from "./templates/first.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:86211967564e942f86f973_37004871%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd42a80baf90bb3237671ca794f5bb65dadbaca7c' => 
    array (
      0 => './templates/first.tpl',
      1 => 1447897370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86211967564e942f86f973_37004871',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564e942f9ab555_15343940',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564e942f9ab555_15343940')) {
function content_564e942f9ab555_15343940 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '86211967564e942f86f973_37004871';
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

<br/>

<a href="<?php echo $_smarty_tpl->tpl_vars['t']->value->tt;?>
">T</a>
<br/>

<?php echo @constant('__FILE__');?>

<br/>
<?php echo @constant('MY_CONST');?>

<br/>
<?php echo $_GET['id'];?>

<br/>

<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
 
</body>
</html>
<?php }
}
?>