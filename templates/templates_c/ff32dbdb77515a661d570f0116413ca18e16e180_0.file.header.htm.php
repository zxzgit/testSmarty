<?php /* Smarty version 3.1.24, created on 2015-12-24 15:43:10
         compiled from "/mnt/hgfs/vmshare/www.zxzmetre.com/testSmarty/templates/templates/header.htm" */ ?>
<?php
/*%%SmartyHeaderCode:908221139567ba20e164785_29498374%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff32dbdb77515a661d570f0116413ca18e16e180' => 
    array (
      0 => '/mnt/hgfs/vmshare/www.zxzmetre.com/testSmarty/templates/templates/header.htm',
      1 => 1450942987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '908221139567ba20e164785_29498374',
  'variables' => 
  array (
    'food' => 0,
    'NEW_ON' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567ba20e20bab2_92653026',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567ba20e20bab2_92653026')) {
function content_567ba20e20bab2_92653026 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '908221139567ba20e164785_29498374';
$_smarty_tpl->tpl_vars['food'] = new Smarty_Variable('banana', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['food'] = clone $_smarty_tpl->tpl_vars['food'];?>
this in header food value is:<?php echo $_smarty_tpl->tpl_vars['food']->value;?>
<br>
this in header NEW_N value is:<?php echo $_smarty_tpl->tpl_vars['NEW_ON']->value;?>
<BR><?php }
}
?>