<?php /* Smarty version Smarty-3.1.7, created on 2016-07-29 06:10:18
         compiled from "C:\xampp\htdocs\vtigercrm_6.5\includes\runtime/../../layouts/vlayout\modules\Leads\ConvertLead.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27382579af34a53e615-06652176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a14b96acb2bbcf4d868fc5644bd1fe301b09eef6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm_6.5\\includes\\runtime/../../layouts/vlayout\\modules\\Leads\\ConvertLead.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27382579af34a53e615-06652176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONVERT_LEAD_FIELDS' => 0,
    'MODULE' => 0,
    'RECORD' => 0,
    'MODULE_NAME' => 0,
    'ACCOUNT_FIELD_MODEL' => 0,
    'CONTACT_FIELD_MODEL' => 0,
    'CONTACT_ACCOUNT_FIELD_MODEL' => 0,
    'SINGLE_MODULE_NAME' => 0,
    'MODULE_FIELD_MODEL' => 0,
    'FIELD_MODEL' => 0,
    'ASSIGN_TO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_579af34ab2247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579af34ab2247')) {function content_579af34ab2247($_smarty_tpl) {?>
<div id="convertLeadContainer" class='modelContainer'><?php if (!$_smarty_tpl->tpl_vars['CONVERT_LEAD_FIELDS']->value['Accounts']&&!$_smarty_tpl->tpl_vars['CONVERT_LEAD_FIELDS']->value['Contacts']){?><input type="hidden" id="convertLeadErrorTitle" value="<?php echo vtranslate('LBL_CONVERT_LEAD_ERROR_TITLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/><input id="convertLeadError" class="convertLeadError" type="hidden" value="<?php echo vtranslate('LBL_CONVERT_LEAD_ERROR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/><?php }else{ ?><div class="modal-header contentsBackground"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">&times;</button><h3><?php echo vtranslate('LBL_CONVERT_LEAD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</h3></div></div><form class="form-horizontal" id="convertLeadForm" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="view" value="SaveConvertLead"/><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"/><input type="hidden" name="modules" value=''/><div class="modal-body accordion" id="leadAccordion"><?php  $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONVERT_LEAD_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_NAME']->value = $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->key;
?><div class="accordion-group convertLeadModules"><div class="header accordion-heading"><div data-parent="#leadAccordion" data-toggle="collapse" class="accordion-toggle table-bordered moduleSelection" href="#<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_FieldInfo"><?php if ($_smarty_tpl->tpl_vars['ACCOUNT_FIELD_MODEL']->value->isMandatory()){?><input type="hidden" id="oppAccMandatory" value=<?php echo $_smarty_tpl->tpl_vars['ACCOUNT_FIELD_MODEL']->value->isMandatory();?>
 /><?php }?><?php if ($_smarty_tpl->tpl_vars['CONTACT_FIELD_MODEL']->value->isMandatory()){?><input type="hidden" id="oppConMandatory" value=<?php echo $_smarty_tpl->tpl_vars['CONTACT_FIELD_MODEL']->value->isMandatory();?>
 /><?php }?><?php if ($_smarty_tpl->tpl_vars['CONTACT_ACCOUNT_FIELD_MODEL']->value->isMandatory()){?><input type="hidden" id="conAccMandatory" value=<?php echo $_smarty_tpl->tpl_vars['CONTACT_ACCOUNT_FIELD_MODEL']->value->isMandatory();?>
 /><?php }?><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
Module" class="convertLeadModuleSelection alignBottom" data-module="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value!='Potentials'){?> <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Accounts'&&$_smarty_tpl->tpl_vars['CONTACT_ACCOUNT_FIELD_MODEL']->value&&$_smarty_tpl->tpl_vars['CONTACT_ACCOUNT_FIELD_MODEL']->value->isMandatory()){?> disabled="disabled" <?php }?> checked="" <?php }?>/><?php $_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME'] = new Smarty_variable("SINGLE_".($_smarty_tpl->tpl_vars['MODULE_NAME']->value), null, 0);?><span style="position:relative;top:2px;">&nbsp;&nbsp;&nbsp;<?php echo vtranslate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span><span class="pull-right"><i class="iconArrow<?php if ($_smarty_tpl->tpl_vars['CONVERT_LEAD_FIELDS']->value['Accounts']&&$_smarty_tpl->tpl_vars['MODULE_NAME']->value=="Accounts"){?> icon-inverted icon-chevron-up <?php }elseif(!$_smarty_tpl->tpl_vars['CONVERT_LEAD_FIELDS']->value['Accounts']&&$_smarty_tpl->tpl_vars['MODULE_NAME']->value=="Contacts"){?> icon-inverted icon-chevron-up <?php }else{ ?> icon-inverted icon-chevron-down <?php }?>alignBottom"></i></span></div></div><div id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_FieldInfo" class="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_FieldInfo accordion-body collapse fieldInfo <?php if ($_smarty_tpl->tpl_vars['CONVERT_LEAD_FIELDS']->value['Accounts']&&$_smarty_tpl->tpl_vars['MODULE_NAME']->value=="Accounts"){?> in <?php }elseif(!$_smarty_tpl->tpl_vars['CONVERT_LEAD_FIELDS']->value['Accounts']&&$_smarty_tpl->tpl_vars['MODULE_NAME']->value=="Contacts"){?> in <?php }?>"><table class="table table-bordered moduleBlock"><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?><tr><td class="fieldLabel"><label class='muted pull-right marginRight10px'><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> <span class="redColor">*</span> <?php }?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr><?php } ?></table></div></div><?php } ?><div class="overflowVisible"><table class="table table-bordered"><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['ASSIGN_TO']->value, null, 0);?><tr><td class="fieldLabel"><label class='muted pull-right'><span class="redColor">*</span> <?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> <?php }?></label></td><td class="fieldValue"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr><tr><td class="fieldLabel"><label class='muted pull-right'><?php echo vtranslate('LBL_TRANSFER_RELATED_RECORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue"><?php  $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONVERT_LEAD_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_NAME']->value = $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->key;
?><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value!='Potentials'){?><input type="radio" id="transfer<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" class="transferModule alignBottom" name="transferModule" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['CONVERT_LEAD_FIELDS']->value['Contacts']&&$_smarty_tpl->tpl_vars['MODULE_NAME']->value=="Contacts"){?> checked="" <?php }elseif(!$_smarty_tpl->tpl_vars['CONVERT_LEAD_FIELDS']->value['Contacts']&&$_smarty_tpl->tpl_vars['MODULE_NAME']->value=="Accounts"){?> checked="" <?php }?>/><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Contacts'){?>&nbsp; <?php echo vtranslate('SINGLE_Contacts',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 &nbsp;&nbsp;<?php }else{ ?>&nbsp; <?php echo vtranslate('SINGLE_Accounts',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 &nbsp;&nbsp;<?php }?><?php }?><?php } ?></td></tr></table></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }?></div><?php }} ?>