<?php /* Smarty version 3.1.24, created on 2015-12-24 15:01:56
         compiled from "D:/vmshare/www.zxzmetre.com/testSmarty/templates/templates/header.htm" */ ?>
<?php
/*%%SmartyHeaderCode:326567b9864748862_28072777%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5d0cc0dc4fc7e131262eb210b5968f02135a213' => 
    array (
      0 => 'D:/vmshare/www.zxzmetre.com/testSmarty/templates/templates/header.htm',
      1 => 1450931151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326567b9864748862_28072777',
  'variables' => 
  array (
    'food' => 0,
    'NEW_ON' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567b98647776b3_87628344',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567b98647776b3_87628344')) {
function content_567b98647776b3_87628344 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '326567b9864748862_28072777';
$_smarty_tpl->tpl_vars['food'] = new Smarty_Variable('banana', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['food'] = clone $_smarty_tpl->tpl_vars['food'];?>
this in header food value is:<?php echo $_smarty_tpl->tpl_vars['food']->value;?>
<br>
        <?php echo $_smarty_tpl->tpl_vars['NEW_ON']->value;?>
<BR><?php }
}
?>