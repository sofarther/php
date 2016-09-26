<?php /* Smarty version 3.1.24, created on 2016-01-24 10:00:13
         compiled from "/home/sofar/WEB_CONF/configs/var.config" */ ?>
<?php
/*%%SmartyHeaderCode:%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e6283eee1fe91ad61d8db01291229bed5996ad' => 
    array (
      0 => 'var.config',
      1 => 1434427190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56a4302dd34ea5_50581990',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a4302dd34ea5_50581990')) {
function content_56a4302dd34ea5_50581990 ($_smarty_tpl) {

Smarty_Internal_Extension_Config::loadConfigVars($_smarty_tpl, array (
  'sections' => 
  array (
    'Table' => 
    array (
      'vars' => 
      array (
        'TableWidth' => '500',
        'Align' => 'center',
        'CellSpace' => '0px',
        'TableBorder' => '0px',
        'Color' => 'aqua',
        'bgColor' => '#cccccc',
        'bgColor1' => '#ffffff',
        'bgColor2' => '#cccccc',
      ),
    ),
  ),
  'vars' => 
  array (
    'Title' => 'This is var page',
    'Author' => 'sofar',
  ),
));
}
}
?>