<?php /* Smarty version Smarty-3.1.7, created on 2016-08-19 11:54:36
         compiled from "/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/RecordNamesList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71431632757b6f37cb23283-85231859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd58c22c69f74225b87726af5bed40bc3376a53d2' => 
    array (
      0 => '/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/RecordNamesList.tpl',
      1 => 1470736422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71431632757b6f37cb23283-85231859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORDS' => 0,
    'recordsModel' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57b6f37cb980a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b6f37cb980a')) {function content_57b6f37cb980a($_smarty_tpl) {?>
<div class="recordNamesList"><div class="row-fluid"><div class=""><ul class="nav nav-list"><?php  $_smarty_tpl->tpl_vars['recordsModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recordsModel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recordsModel']->key => $_smarty_tpl->tpl_vars['recordsModel']->value){
$_smarty_tpl->tpl_vars['recordsModel']->_loop = true;
?><li><a data-id=<?php echo $_smarty_tpl->tpl_vars['recordsModel']->value->getId();?>
 href="<?php echo $_smarty_tpl->tpl_vars['recordsModel']->value->getDetailViewUrl();?>
" title="<?php echo decode_html($_smarty_tpl->tpl_vars['recordsModel']->value->getName());?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['recordsModel']->value->getName());?>
</a></li><?php }
if (!$_smarty_tpl->tpl_vars['recordsModel']->_loop) {
?><li style="text-align:center"><?php echo vtranslate('LBL_NO_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</li><?php } ?></ul></div></div></div>
<?php }} ?>