<?php /* Smarty version 3.1.24, created on 2015-06-13 14:02:39
         compiled from "./templates/section.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1569986656557bc77f7cf245_11594586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7760f6ea44eb81997488e2fbd6666070bfa627e7' => 
    array (
      0 => './templates/section.tpl',
      1 => 1434175354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1569986656557bc77f7cf245_11594586',
  'variables' => 
  array (
    'students' => 0,
    't' => 0,
    'num1' => 0,
    'num2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557bc77f81ef54_80312313',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557bc77f81ef54_80312313')) {
function content_557bc77f81ef54_80312313 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1569986656557bc77f7cf245_11594586';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"section test"), 0);
?>

<table border="1px" width="500px" cellspacing="0px" align="center">
<tr><td>序号</td><td>姓名</td><td>数学</td><td>英语</td><td>历史</td>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['line'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['line']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['name'] = 'line';
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['students']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['total']);
?>
 <tr>
 <td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['line']['iteration'];?>
</td>
 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['col'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['col']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['students']->value[$_smarty_tpl->getVariable('smarty')->value['section']['line']['index']]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['name'] = 'col';
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total']);
?>
  <td><?php echo $_smarty_tpl->tpl_vars['students']->value[$_smarty_tpl->getVariable('smarty')->value['section']['line']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']];?>
</td>
<?php endfor; endif; ?>
</tr>
<?php endfor; endif; ?>
</table>
<?php echo "this is a ".((string)$_smarty_tpl->tpl_vars['t']->value[1]['name'])." test <br/>";?>

<?php echo "\$_GET['id']=".((string)$_GET['id'])." <br/> ";?>

<?php echo $_GET['id'];?>

<?php echo "__FILE__ is ".((string)@constant('__FILE__'))."<br/>";?>

<?php echo @constant('PHP_OS');?>

<?php echo @constant('MY_CONST_VAL');?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['stu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['stu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['name'] = 'stu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['students']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['stu']['total']);
?>
  <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['stu']['first']) {?>
     <hr>
  <?php }?>
   <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['stu']['index'];?>
.<?php echo $_smarty_tpl->tpl_vars['students']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stu']['index']][0];?>

   <br>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['stu']['last']) {?>
     <hr>
 <?php }?>
<?php endfor; endif; ?>
<center>共有<b><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['stu']['total'];?>
</b>行</center>
<hr>
<?php if (!($_smarty_tpl->tpl_vars['num1']->value % $_smarty_tpl->tpl_vars['num2']->value)) {?> 
  <p><b><i>34能被12整除</i></b></p>
<?php } else { ?> <b><i>34不能被12整除</i></b>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('author'=>"sofar"), 0);
?>

<?php }
}
?>