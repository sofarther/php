<?php /* Smarty version 3.1.24, created on 2015-11-19 16:00:20
         compiled from "./templates/modify.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1006151055564d8194d6cdf3_84104820%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d89e44ee6096a40e1c0083d3127ac286559c4e6' => 
    array (
      0 => './templates/modify.tpl',
      1 => 1447920018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1006151055564d8194d6cdf3_84104820',
  'variables' => 
  array (
    'str' => 0,
    'date' => 0,
    'num' => 0,
    'tags' => 0,
    'str2' => 0,
    'str3' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564d8194dde5c8_70819731',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564d8194dde5c8_70819731')) {
function content_564d8194dde5c8_70819731 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_sofar')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/modifier.sofar.php';
if (!is_callable('smarty_modifier_spacify')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/modifier.spacify.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_mb_wordwrap')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/shared.mb_wordwrap.php';
if (!is_callable('smarty_modifier_escape')) require_once '/home/sofar/public_html/php/smarty/libs/plugins/modifier.escape.php';

$_smarty_tpl->properties['nocache_hash'] = '1006151055564d8194d6cdf3_84104820';
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<hr>自定义变量调节器<br/>
<?php echo smarty_modifier_sofar($_smarty_tpl->tpl_vars['str']->value);?>

<hr>
<?php echo smarty_modifier_spacify(mb_strtoupper($_smarty_tpl->tpl_vars['str']->value, 'UTF-8'));?>

<hr>
<?php echo smarty_modifier_truncate(smarty_modifier_spacify($_smarty_tpl->tpl_vars['str']->value));?>

<hr>
<?php echo smarty_modifier_spacify(smarty_modifier_truncate(mb_strtolower($_smarty_tpl->tpl_vars['str']->value, 'UTF-8'),15,'*****',true));?>


<hr>
<?php echo nl2br(preg_replace('!\s+!u', ' ',smarty_modifier_capitalize($_smarty_tpl->tpl_vars['str']->value)));?>

<?php echo nl2br(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['str']->value));?>

<hr>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value)===null||$tmp==='' ? 1626389 : $tmp);?>

<br/>
<?php echo smarty_modifier_date_format((($tmp = @$_smarty_tpl->tpl_vars['date']->value)===null||$tmp==='' ? 12345678 : $tmp),'%Y-%m-%d %H:%M:%S');?>

<hr>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['num']->value)===null||$tmp==='' ? 23.456 : $tmp);?>

<?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['num']->value);?>

<hr>
<?php echo preg_replace('!<[^>]*?>!', ' ', (($tmp = @$_smarty_tpl->tpl_vars['tags']->value)===null||$tmp==='' ? "<b><i><u>hello world</u></i></b>" : $tmp));?>

<hr>
<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['str']->value, $tmp);?>

<br>
<?php echo mb_strlen($_smarty_tpl->tpl_vars['str']->value, 'UTF-8');?>

<br/>
<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['str']->value, $tmp);?>

<br>
<?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['str']->value, $tmp)+1);?>

<br>
<?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['str']->value, $tmp);?>

<hr>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['str']->value,'modify','modifyer');?>

<br>
<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['str']->value,'/\'(.+?)\'/','\\1');?>

<hr>
<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<hr>
<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['str2']->value,30,"\n",false);?>

<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['str2']->value,30,"<br/>\n",false);?>

<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['str2']->value,30,"<br/>\n",true);?>

<hr>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['str3']->value, ENT_QUOTES, 'UTF-8', true);?>

<br/>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['str3']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

<br/>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['str3']->value);?>

<br/>
<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['str3']->value);?>

<br/>
<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['url']->value, "hex");?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['url']->value, "hexentity");?>
</a>
</body>
</html>
<?php }
}
?>