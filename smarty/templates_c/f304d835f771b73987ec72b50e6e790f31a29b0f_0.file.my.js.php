<?php /* Smarty version 3.1.24, created on 2015-11-19 15:06:52
         compiled from "/home/sofar/public_html/php/smarty/my.js" */ ?>
<?php
/*%%SmartyHeaderCode:795609032564d750cbf2d10_36499560%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f304d835f771b73987ec72b50e6e790f31a29b0f' => 
    array (
      0 => '/home/sofar/public_html/php/smarty/my.js',
      1 => 1447916628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '795609032564d750cbf2d10_36499560',
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564d750cbf54e1_83618356',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564d750cbf54e1_83618356')) {
function content_564d750cbf54e1_83618356 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '795609032564d750cbf2d10_36499560';
?>
<?php echo '<script'; ?>
 type="text/javascript">
  function showMsg(){
   var str="<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
";
    alert("Message: " + str);
  }
<?php echo '</script'; ?>
>
<?php }
}
?>