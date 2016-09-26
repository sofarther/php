<?php /* Smarty version 3.1.24, created on 2015-11-17 17:20:58
         compiled from "./templates/myfunc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:963890868564af17a4e0db8_89795233%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45f38310c095a7cc1f438d2873dd5863aaf691d1' => 
    array (
      0 => './templates/myfunc.tpl',
      1 => 1447752054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '963890868564af17a4e0db8_89795233',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564af17a506221_92398621',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564af17a506221_92398621')) {
function content_564af17a506221_92398621 ($_smarty_tpl) {
if (!is_callable('smarty_function_sofar')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/function.sofar.php';

$_smarty_tpl->properties['nocache_hash'] = '963890868564af17a4e0db8_89795233';
echo myhandler(array('times'=>"10",'content'=>"hello,world",'size'=>"4",'color'=>"aqua"),$_smarty_tpl);?>

<h3>Block</h3>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('msg', array('times'=>"5",'size'=>"5",'color'=>"blue")); $_block_repeat=true; echo myblock(array('times'=>"5",'size'=>"5",'color'=>"blue"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
你好！<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo myblock(array('times'=>"5",'size'=>"5",'color'=>"blue"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h3>Plugin</h3>
<?php echo smarty_function_sofar(array('times'=>"10",'content'=>"hello,world",'size'=>"4",'color'=>"aqua"),$_smarty_tpl);?>

<?php }
}
?>