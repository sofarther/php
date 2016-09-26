<?php /* Smarty version 3.1.24, created on 2016-01-24 09:41:59
         compiled from "./templates/var.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:174665526856a42be7258df1_15874042%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c678a162cdf8d97afd412f274e8e96b541d6299' => 
    array (
      0 => './templates/var.tpl',
      1 => 1453599717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174665526856a42be7258df1_15874042',
  'variables' => 
  array (
    'num' => 0,
    'caption' => 0,
    'cols' => 0,
    'col' => 0,
    'students' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56a42be72abc79_21283705',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a42be72abc79_21283705')) {
function content_56a42be72abc79_21283705 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '174665526856a42be7258df1_15874042';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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

<{foreach from=$students item=stu name=stds}>
 <tr bgcolor= <{if $smarty.foreach.stds.iteration%2==1 }> "<{$smarty.config.bgColor1}>"<{else}> "<{$smarty.config.bgColor2}>" <{/if}>  >
 <td><{$smarty.foreach.stds.iteration}></td>
  <{foreach from=$stu key=col item=value name=std}>
     <td><{$stu.$col}></td>
<{/foreach}>
</tr>

<{/foreach}>

 <?php
$_from = $_smarty_tpl->tpl_vars['students']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
   <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['stu_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['math'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['english'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['history'];?>
</td>
  </tr>
 <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</table>
<br/>
 <p>共有<b><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_stds']->value['total']) ? $_smarty_tpl->tpl_vars['__foreach_stds']->value['total'] : null);?>
</b>条记录</p> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>