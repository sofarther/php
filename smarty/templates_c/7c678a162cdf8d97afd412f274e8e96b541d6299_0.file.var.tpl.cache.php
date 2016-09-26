<?php /* Smarty version 3.1.24, created on 2015-06-16 11:52:58
         compiled from "./templates/var.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:836317796557f9d9ae5d7d9_97713380%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c678a162cdf8d97afd412f274e8e96b541d6299' => 
    array (
      0 => './templates/var.tpl',
      1 => 1434426774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '836317796557f9d9ae5d7d9_97713380',
  'variables' => 
  array (
    'num' => 0,
    'caption' => 0,
    'cols' => 0,
    'col' => 0,
    'students' => 0,
    'stu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557f9d9aea9596_31962699',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557f9d9aea9596_31962699')) {
function content_557f9d9aea9596_31962699 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '836317796557f9d9ae5d7d9_97713380';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if ((1 & $_smarty_tpl->tpl_vars['num']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
 is a add<br/>    
<?php } elseif (!(1 & $_smarty_tpl->tpl_vars['num']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
 is a even<br/> 
<?php }?>
<?php  Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, "var.config", null, 'global');?>
<?php  Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, "var.config", "Table", 'local');?>
<table width="<?php echo $_smarty_tpl->getConfigVariable( 'TableWidth');?>
" align="<?php echo $_smarty_tpl->getConfigVariable( 'Align');?>
" cellspacing="<?php echo $_smarty_tpl->getConfigVariable( 'CellSpace');?>
" border="<?php echo $_smarty_tpl->getConfigVariable( 'TableBorder');?>
">
<caption><font color="<?php echo $_smarty_tpl->getConfigVariable( 'Color');?>
"<h3><?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
</h3></font></caption>
<tr bgcolor="<?php echo $_smarty_tpl->getConfigVariable( 'bgColor');?>
" >
<th>number</th>
<?php
$_from = $_smarty_tpl->tpl_vars['cols']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$foreach_col_Sav = $_smarty_tpl->tpl_vars['col'];
?>
  <th><?php echo $_smarty_tpl->tpl_vars['col']->value->name;?>
</th>
<?php
$_smarty_tpl->tpl_vars['col'] = $foreach_col_Sav;
}
if (!$_smarty_tpl->tpl_vars['col']->_loop) {
?>
<p>数组 <?php echo $_smarty_tpl->tpl_vars['cols']->value;?>
 中没有任何值</p>
<?php
}
?>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['students']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['stu'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['stu']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_stds'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['stu']->value) {
$_smarty_tpl->tpl_vars['stu']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_stds']->value['iteration']++;
$foreach_stu_Sav = $_smarty_tpl->tpl_vars['stu'];
?>
 <tr bgcolor= <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_stds']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_stds']->value['iteration'] : null)%2 == 1) {?> "<?php echo $_smarty_tpl->getConfigVariable('bgColor1');?>
"<?php } else { ?> "<?php echo $_smarty_tpl->getConfigVariable('bgColor2');?>
" <?php }?>  >
 <td><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_stds']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_stds']->value['iteration'] : null);?>
</td>
  <?php
$_from = $_smarty_tpl->tpl_vars['stu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
     <td><?php echo $_smarty_tpl->tpl_vars['stu']->value[$_smarty_tpl->tpl_vars['col']->value];?>
</td>
<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
</tr>

<?php
$_smarty_tpl->tpl_vars['stu'] = $foreach_stu_Sav;
}
?>

</table>
<br/>
 <p>共有<b><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_stds']->value['total']) ? $_smarty_tpl->tpl_vars['__foreach_stds']->value['total'] : null);?>
</b>条记录</p> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>