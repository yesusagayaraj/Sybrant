<?php /* Smarty version Smarty-3.1.7, created on 2016-10-11 01:26:00
         compiled from "/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Contacts/DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63680336757fc3fa83b1df2-68198619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588277302f393ad9f52261f9549ad76a78f04372' => 
    array (
      0 => '/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Contacts/DetailViewHeaderTitle.tpl',
      1 => 1473916907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63680336757fc3fa83b1df2-68198619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'IMAGE_DETAILS' => 0,
    'IMAGE_INFO' => 0,
    'MODULE_MODEL' => 0,
    'NAME_FIELD' => 0,
    'FIELD_MODEL' => 0,
    'COUNTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57fc3fa8446f3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc3fa8446f3')) {function content_57fc3fa8446f3($_smarty_tpl) {?>
<span class="span2"><?php $_smarty_tpl->tpl_vars['IMAGE_DETAILS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->getImageDetails(), null, 0);?><?php  $_smarty_tpl->tpl_vars['IMAGE_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ITER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['IMAGE_INFO']->key => $_smarty_tpl->tpl_vars['IMAGE_INFO']->value){
$_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ITER']->value = $_smarty_tpl->tpl_vars['IMAGE_INFO']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['path'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['path'];?>
_<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
" width="65" height="80" align="left"><br><?php }else{ ?><img src="<?php echo vimage_path('summary_Contact.png');?>
" class="summaryImg"/><?php }?><?php } ?><?php if (empty($_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value)){?><img src="<?php echo vimage_path('summary_Contact.png');?>
" class="summaryImg"/><?php }?></span><span class="span8 margin0px"><span class="row-fluid"><h4 class="recordLabel pushDown" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"> &nbsp;<?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype')){?><span class="salutation"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>
</span>&nbsp;<?php }?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['NAME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD']->key => $_smarty_tpl->tpl_vars['NAME_FIELD']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['NAME_FIELD']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPermissions()){?><span class="<?php echo $_smarty_tpl->tpl_vars['NAME_FIELD']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME_FIELD']->value);?>
</span><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==0&&($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME_FIELD']->value))){?>&nbsp;<?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }?><?php }?><?php } ?></h4></span><span class="row-fluid"><span class="title_label">&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('title');?>
</span><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('account_id')&&$_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('title')){?>&nbsp;<?php echo vtranslate('LBL_AT');?>
&nbsp;<?php }?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('account_id');?>
</span></span><?php }} ?>