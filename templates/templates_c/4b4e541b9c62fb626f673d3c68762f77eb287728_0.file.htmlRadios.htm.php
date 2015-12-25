<?php /* Smarty version 3.1.24, created on 2015-12-25 12:14:09
         compiled from "/mnt/hgfs/vmshare/www.zxzmetre.com/testSmarty/templates/templates/htmlRadios.htm" */ ?>
<?php
/*%%SmartyHeaderCode:854983557567cc291f1f130_16519063%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b4e541b9c62fb626f673d3c68762f77eb287728' => 
    array (
      0 => '/mnt/hgfs/vmshare/www.zxzmetre.com/testSmarty/templates/templates/htmlRadios.htm',
      1 => 1451016846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '854983557567cc291f1f130_16519063',
  'variables' => 
  array (
    'cust_radios' => 0,
    'customer_id' => 0,
    'people' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cc2921d05a7_97444661',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cc2921d05a7_97444661')) {
function content_567cc2921d05a7_97444661 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_radios')) require_once '/mnt/hgfs/vmshare/www.zxzmetre.com/testSmarty/smarty/libs/plugins/function.html_radios.php';
if (!is_callable('smarty_function_cycle')) require_once '/mnt/hgfs/vmshare/www.zxzmetre.com/testSmarty/smarty/libs/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '854983557567cc291f1f130_16519063';
echo smarty_function_html_radios(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_radios']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>

        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['people']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
        <a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['people']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']];
echo smarty_function_cycle(array('values'=>"hehe,haha"),$_smarty_tpl);?>
</a>
        <?php endfor; endif;

}
}
?>