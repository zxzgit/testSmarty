<?php /* Smarty version 3.1.24, created on 2015-12-24 15:20:15
         compiled from "/mnt/hgfs/vmshare/www.zxzmetre.com/testSmarty/templates/templates/index.htm" */ ?>
<?php
/*%%SmartyHeaderCode:1172196684567b9caf9a6504_97214687%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de51dec25a8be6ee1271f8664a03fe12448392bb' => 
    array (
      0 => '/mnt/hgfs/vmshare/www.zxzmetre.com/testSmarty/templates/templates/index.htm',
      1 => 1450941612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1172196684567b9caf9a6504_97214687',
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
  'unifunc' => 'content_567b9cafa27814_99332304',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567b9cafa27814_99332304')) {
function content_567b9cafa27814_99332304 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/mnt/hgfs/vmshare/www.zxzmetre.com/testSmarty/smarty/libs/plugins/function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '1172196684567b9caf9a6504_97214687';
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