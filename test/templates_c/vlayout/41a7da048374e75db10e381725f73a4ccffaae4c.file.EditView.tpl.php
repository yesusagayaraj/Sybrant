<?php /* Smarty version Smarty-3.1.7, created on 2016-12-08 09:40:41
         compiled from "/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Settings/SMSNotifier/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112305603558492a9943b023-94675844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41a7da048374e75db10e381725f73a4ccffaae4c' => 
    array (
      0 => '/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Settings/SMSNotifier/EditView.tpl',
      1 => 1473916903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112305603558492a9943b023-94675844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD_ID' => 0,
    'QUALIFIED_MODULE_NAME' => 0,
    'EDITABLE_FIELDS' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'RECORD_MODEL' => 0,
    'FIELD_TYPE' => 0,
    'PROVIDERS' => 0,
    'PROVIDER_MODEL' => 0,
    'PROVIDER_NAME' => 0,
    'FIELD_VALUE' => 0,
    'PROVIDERS_FIELD_MODELS' => 0,
    'TEMPLATE_NAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58492a9950726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58492a9950726')) {function content_58492a9950726($_smarty_tpl) {?>
<div class="modal"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value){?><h3><?php echo vtranslate('LBL_EDIT_CONFIGURATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
 </h3><?php }else{ ?><h3><?php echo vtranslate('LBL_ADD_CONFIGURATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
 </h3><?php }?></div><form class="form-horizontal" id="smsConfig" method="POST"><div class="modal-body configContent"><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value){?><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" name="record" id="recordId"/><?php }?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EDITABLE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?><div class="control-group"><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><span class="control-label"><strong><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</strong></span><div class="controls"><?php $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_TYPE']->value=='picklist'){?><select class="chzn-select providerType" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-validation-engine="validate[ required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><option></option><?php  $_smarty_tpl->tpl_vars['PROVIDER_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PROVIDER_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PROVIDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PROVIDER_MODEL']->key => $_smarty_tpl->tpl_vars['PROVIDER_MODEL']->value){
$_smarty_tpl->tpl_vars['PROVIDER_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['PROVIDER_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['PROVIDER_MODEL']->value->getName(), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['PROVIDER_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==$_smarty_tpl->tpl_vars['PROVIDER_NAME']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['PROVIDER_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</option><?php } ?></select><?php }elseif($_smarty_tpl->tpl_vars['FIELD_TYPE']->value=='radio'){?><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value='1' <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value){?> checked="checked" <?php }?> />&nbsp;<?php echo vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
&nbsp;&nbsp;&nbsp;<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value='0' <?php if (!$_smarty_tpl->tpl_vars['FIELD_VALUE']->value){?> checked="checked" <?php }?>/>&nbsp;<?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
<?php }elseif($_smarty_tpl->tpl_vars['FIELD_TYPE']->value=='password'){?><input type="password" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="span3" data-validation-engine="validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" /><?php }else{ ?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="span3" <?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='username'){?> data-validation-engine="validate[required]" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" /><?php }?></div></div><?php } ?><?php  $_smarty_tpl->tpl_vars['PROVIDER_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PROVIDER_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['PROVIDER_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PROVIDERS_FIELD_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PROVIDER_MODEL']->key => $_smarty_tpl->tpl_vars['PROVIDER_MODEL']->value){
$_smarty_tpl->tpl_vars['PROVIDER_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['PROVIDER_NAME']->value = $_smarty_tpl->tpl_vars['PROVIDER_MODEL']->key;
?><div id="<?php echo $_smarty_tpl->tpl_vars['PROVIDER_NAME']->value;?>
_container" class="providerFields <?php if ($_smarty_tpl->tpl_vars['PROVIDER_NAME']->value!=$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('providertype')){?> hide <?php }?>"><?php $_smarty_tpl->tpl_vars['TEMPLATE_NAME'] = new Smarty_variable(Settings_SMSNotifier_ProviderField_Model::getEditFieldTemplateName($_smarty_tpl->tpl_vars['PROVIDER_NAME']->value), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['TEMPLATE_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php } ?></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>