<?php /* Smarty version 3.1.24, created on 2015-06-18 20:49:40
         compiled from "./templates/cachelessTest.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1091232055582be64491780_52091143%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc34bc8f5d156f82b6f3a562fd3d110803dbc863' => 
    array (
      0 => './templates/cachelessTest.tpl',
      1 => 1434631324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1091232055582be64491780_52091143',
  'has_nocache_code' => true,
  'version' => '3.1.24',
  'unifunc' => 'content_5582be644bd788_36364014',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5582be644bd788_36364014')) {
function content_5582be644bd788_36364014 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1091232055582be64491780_52091143';
?>
<html>
<head>
 <meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<b>Hello World</b>
<br/>
已经缓存的：<?php echo time();?>

<br/>

<b>没有缓存的：</b>
<u>Now is </u>
<?php echo '/*%%SmartyNocache:1091232055582be64491780_52091143%%*/<?php echo time();?>
/*/%%SmartyNocache:1091232055582be64491780_52091143%%*/';?>


</body>
</html>
<?php }
}
?>