<?php /* Smarty version Smarty-3.1.7, created on 2016-11-30 13:19:33
         compiled from "/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Import/ImportDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226848602583ed1e53200c1-21317127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d470b21192b5a4061a000d92226254f2922443b' => 
    array (
      0 => '/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Import/ImportDetails.tpl',
      1 => 1473916904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226848602583ed1e53200c1-21317127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TYPE' => 0,
    'MODULE' => 0,
    'IMPORT_RECORDS' => 0,
    'LISTVIEW_HEADERS' => 0,
    'LISTVIEW_HEADER_NAME' => 0,
    'IMPORT_RESULT_DATA' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_583ed1e53875f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ed1e53875f')) {function content_583ed1e53875f($_smarty_tpl) {?>
<div class="popupEntriesDiv textAlignCenter"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><?php $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS'] = new Smarty_variable($_smarty_tpl->tpl_vars['IMPORT_RECORDS']->value['headers'], null, 0);?><?php $_smarty_tpl->tpl_vars['IMPORT_RESULT_DATA'] = new Smarty_variable($_smarty_tpl->tpl_vars['IMPORT_RECORDS']->value[$_smarty_tpl->tpl_vars['TYPE']->value], null, 0);?><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->_loop = true;
?><th><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value;?>
</th><?php } ?></tr></thead><?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['IMPORT_RESULT_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
?><tr class="listViewEntries"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->_loop = true;
?><td><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value);?>
</td><?php } ?></tr><?php } ?></table><?php }} ?>