<?php /* Smarty version 3.1.24, created on 2015-11-19 15:06:52
         compiled from "./templates/javascript.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1040701326564d750cb886b3_87606202%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18317b08fe627314e9a20a57ffe84e1642142967' => 
    array (
      0 => './templates/javascript.tpl',
      1 => 1447916809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1040701326564d750cb886b3_87606202',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564d750cbf02a2_23222720',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564d750cbf02a2_23222720')) {
function content_564d750cbf02a2_23222720 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1040701326564d750cb886b3_87606202';
?>
<html>
 <head><meta http-equiv="content-type" content="text/html;charset=utf-8"/>

 <?php echo $_smarty_tpl->getSubTemplate ("../my.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</head>
<body>
<input type="button" value="Click" onclick="showMsg()"/>
</body></html>
<?php }
}
?>