<?php /* Smarty version Smarty-3.1.7, created on 2016-11-30 12:34:29
         compiled from "/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/DocumentsFolder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1304705827583ec755906161-27737164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c921c3e8f0f0623d4161692e60fac455b729b25' => 
    array (
      0 => '/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/DocumentsFolder.tpl',
      1 => 1473916909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1304705827583ec755906161-27737164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_INFO' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'FOLDER_VALUES' => 0,
    'FOLDER_VALUE' => 0,
    'FOLDER_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_583ec7559e6bd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ec7559e6bd')) {function content_583ec7559e6bd($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars['FOLDER_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDocumentFolders(), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><select class="chzn-select" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
<?php }?>><?php  $_smarty_tpl->tpl_vars['FOLDER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['FOLDER_VALUE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FOLDER_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER_NAME']->key => $_smarty_tpl->tpl_vars['FOLDER_NAME']->value){
$_smarty_tpl->tpl_vars['FOLDER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['FOLDER_VALUE']->value = $_smarty_tpl->tpl_vars['FOLDER_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FOLDER_VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')==$_smarty_tpl->tpl_vars['FOLDER_VALUE']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['FOLDER_NAME']->value;?>
</option><?php } ?></select><?php }} ?>