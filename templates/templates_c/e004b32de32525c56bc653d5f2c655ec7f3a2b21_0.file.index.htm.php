<?php /* Smarty version 3.1.24, created on 2015-12-24 15:21:46
         compiled from "D:/vmshare/www.zxzmetre.com/testSmarty/templates/templates/index.htm" */ ?>
<?php
/*%%SmartyHeaderCode:22327567b9d0a0cdad6_88223992%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e004b32de32525c56bc653d5f2c655ec7f3a2b21' => 
    array (
      0 => 'D:/vmshare/www.zxzmetre.com/testSmarty/templates/templates/index.htm',
      1 => 1450941612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22327567b9d0a0cdad6_88223992',
  'variables' => 
  array (
    'food' => 0,
    'myOptions' => 0,
    'mySelect' => 0,
    'cust_names' => 0,
    'cust_ids' => 0,
    'customer_id' => 0,
    'lookups' => 0,
    'fav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567b9d0a154711_89938173',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567b9d0a154711_89938173')) {
function content_567b9d0a154711_89938173 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'D:/vmshare/www.zxzmetre.com/testSmarty/smarty/libs/plugins/function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '22327567b9d0a0cdad6_88223992';
echo $_smarty_tpl->getSubTemplate ("header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('NEW_ON'=>'on'), 0);
?>


this in index food value is:<?php echo $_smarty_tpl->tpl_vars['food']->value;?>

<?php echo zxzFn();?>


<?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>


<select name="customer_id" size="<?php echo count($_smarty_tpl->tpl_vars['cust_names']->value);?>
">
    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value),$_smarty_tpl);?>

</select>

<?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['lookups']->value,'selected'=>$_smarty_tpl->tpl_vars['fav']->value),$_smarty_tpl);

}
}
?>