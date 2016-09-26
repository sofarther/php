<?php /* Smarty version 3.1.24, created on 2015-11-21 13:15:18
         compiled from "./templates/build_in.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:762174066564ffde69316a9_57253118%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29ed500fbf1acf4f414678cf14334ccab6d17b6c' => 
    array (
      0 => './templates/build_in.tpl',
      1 => 1448082897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '762174066564ffde69316a9_57253118',
  'variables' => 
  array (
    'times' => 1,
    'myname' => 0,
    'mycounter' => 0,
    'hobbys' => 0,
    'sel' => 0,
    'value' => 0,
    'output' => 0,
    'like' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.24',
  'unifunc' => 'content_564ffde6a18c54_77168339',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ffde6a18c54_77168339')) {
function content_564ffde6a18c54_77168339 ($_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/function.counter.php';
if (!is_callable('smarty_function_html_checkboxes')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/function.html_checkboxes.php';
if (!is_callable('smarty_function_html_options')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_radios')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/function.html_radios.php';

$_smarty_tpl->properties['nocache_hash'] = '762174066564ffde69316a9_57253118';
?>
<html>
 <head><meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<body>

<h2>outputFiler</h2>
<h3>当前访问次数1:<?php echo Smarty_Internal_Nocache_Insert::compile ('insert_times',array(), $_smarty_tpl, 'null');?>
</h3>
<h3>当前访问次数2:<?php echo '/*%%SmartyNocache:762174066564ffde69316a9_57253118%%*/<?php echo $_smarty_tpl->tpl_vars[\'times\']->value;?>
/*/%%SmartyNocache:762174066564ffde69316a9_57253118%%*/';?>
</h3>
<h3>capture</h3>

<?php $_smarty_tpl->_capture_stack[0][] = array("sofar", null, null); ob_start(); ?>
 hello,world it from <?php echo $_smarty_tpl->tpl_vars['myname']->value;?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo Smarty::$_smarty_vars['capture']['sofar'];?>


<{}>


 this is <{hello}><b>Blod</b>







<?php echo smarty_function_counter(array('name'=>'my','start'=>1,'skip'=>1,'assign'=>'mycounter'),$_smarty_tpl);?>

<?php if ((1 & $_smarty_tpl->tpl_vars['mycounter']->value)) {?> 奇数<?php }?>

<?php echo smarty_function_counter(array('name'=>'my'),$_smarty_tpl);?>


<?php if (!(1 & $_smarty_tpl->tpl_vars['mycounter']->value)) {?> 偶数<?php }?>


<?php echo smarty_function_html_checkboxes(array('name'=>'hobby','options'=>$_smarty_tpl->tpl_vars['hobbys']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value),$_smarty_tpl);?>


<?php echo smarty_function_html_checkboxes(array('name'=>'fruit','values'=>$_smarty_tpl->tpl_vars['value']->value,'output'=>$_smarty_tpl->tpl_vars['output']->value,'selected'=>$_smarty_tpl->tpl_vars['like']->value),$_smarty_tpl);?>

<br/>

<select name="bobby" multiple>
 <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['hobbys']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value),$_smarty_tpl);?>

</select>
<br/>

<?php echo smarty_function_html_radios(array('name'=>'hobby','options'=>$_smarty_tpl->tpl_vars['hobbys']->value,'checked'=>$_smarty_tpl->tpl_vars['checked']->value),$_smarty_tpl);?>

</body>
</html>
<?php }
}
?>