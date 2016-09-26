<?php /* Smarty version 3.1.24, created on 2015-06-20 10:44:00
         compiled from "./templates/page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:799721955584d3706738f7_69748918%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21ce1050a4e258c9aba73a50aa059cfa13f1ae09' => 
    array (
      0 => './templates/page.tpl',
      1 => 1434768005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '799721955584d3706738f7_69748918',
  'variables' => 
  array (
    'caption' => 0,
    'fields' => 0,
    'col' => 0,
    'rows' => 0,
    'prev' => 0,
    'next' => 0,
    'pageCount' => 0,
    'offset' => 0,
    'end' => 0,
    'current' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5584d3706af3e5_05414034',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5584d3706af3e5_05414034')) {
function content_5584d3706af3e5_05414034 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '799721955584d3706738f7_69748918';
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
 <table width="500px" align="center" border="0px" cellspacing="0px">
  <caption><h3><?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
</h3></caption>
  <tr>
  <?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$foreach_col_Sav = $_smarty_tpl->tpl_vars['col'];
?>
   <th><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</th>
  <?php
$_smarty_tpl->tpl_vars['col'] = $foreach_col_Sav;
}
?>
  </tr>
  
 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rows']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total']);
?>
  <tr>
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['col'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['col']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['name'] = 'col';
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
   <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['col']['first']) {?>
    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['row']['iteration'];?>
</td>
   <?php } else { ?>
    <td><?php echo $_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']];?>
</td>
  <?php }?>
  <?php endfor; endif; ?>
  </tr>
 <?php endfor; endif; ?>
</table>
<hr>
 <center>
 <a href="pageEach.php?id=0">|&lt;</a>
 &nbsp;&nbsp;&nbsp;&nbsp;
 <a href="pageEach.php?id=<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>
">&lt;&lt;</a>
 &nbsp;&nbsp;&nbsp;&nbsp;
<a href="pageEach.php?id=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">&gt;&gt;</a>
 &nbsp;&nbsp;&nbsp;&nbsp;
<a href="pageEach.php?id=<?php echo $_smarty_tpl->tpl_vars['pageCount']->value;?>
">&gt;|</a>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
当前页显示的记录为：
<b><?php echo $_smarty_tpl->tpl_vars['offset']->value+1;?>
—<?php echo $_smarty_tpl->tpl_vars['end']->value+1;?>
</b>
 &nbsp;&nbsp;&nbsp;&nbsp;
第<i><?php echo $_smarty_tpl->tpl_vars['current']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['pageCount']->value;?>
</i>页
</center>
</body>
</html>
<?php }
}
?>