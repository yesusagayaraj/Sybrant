<?php /* Smarty version Smarty-3.1.7, created on 2016-08-10 09:17:34
         compiled from "/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Import/Import_Step3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193723613257aaf12ece6218-03085360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceede6d5ae5c7dff6630f3ee1eee0d1a3118b6cd' => 
    array (
      0 => '/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Import/Import_Step3.tpl',
      1 => 1470736419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193723613257aaf12ece6218-03085360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'AUTO_MERGE_TYPES' => 0,
    '_MERGE_TYPE' => 0,
    '_MERGE_TYPE_LABEL' => 0,
    'AVAILABLE_FIELDS' => 0,
    '_FIELD_NAME' => 0,
    '_FIELD_INFO' => 0,
    'FOR_MODULE' => 0,
    'ENTITY_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57aaf12ed19e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aaf12ed19e3')) {function content_57aaf12ed19e3($_smarty_tpl) {?>

<table width="100%" cellspacing="0" cellpadding="2">
	<tr> 
		<td width="8%">
			<input type="checkbox" class="font-x-small" id="auto_merge" name="auto_merge" onclick="ImportJs.toogleMergeConfiguration();" />
			<strong><?php echo vtranslate('LBL_IMPORT_STEP_3',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong>
		</td>
		<td>
			<span class="big"><?php echo vtranslate('LBL_IMPORT_STEP_3_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
			<span class="font-x-small">( <?php echo vtranslate('LBL_IMPORT_STEP_3_DESCRIPTION_DETAILED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 )</span>
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<table width="100%" cellspacing="0" cellpadding="5" id="duplicates_merge_configuration" style="display:none;">
				<tr>
					<td>
						<span class="font-x-small"><?php echo vtranslate('LBL_SPECIFY_MERGE_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>&nbsp;&nbsp;
						<select name="merge_type" id="merge_type" class="font-x-small">
							<?php  $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['_MERGE_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AUTO_MERGE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->key => $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->value){
$_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['_MERGE_TYPE']->value = $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['_MERGE_TYPE']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="font-x-small"><?php echo vtranslate('LBL_SELECT_MERGE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
				</tr>
				<tr>
					<td>
						<table class="calDayHour" cellpadding="5" cellspacing="0">
							<tr>
								<td><b><?php echo vtranslate('LBL_AVAILABLE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td>
								<td></td>
								<td><b><?php echo vtranslate('LBL_SELECTED_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td>
							</tr>
							<tr>
								<td>
									<select id="available_fields" multiple size="10" name="available_fields" class="txtBox" style="width: 100%">
										<?php  $_smarty_tpl->tpl_vars['_FIELD_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AVAILABLE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_INFO']->key => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value){
$_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['_FIELD_INFO']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
								<td width="6%">
									<div align="center">
										<input type="button" name="Button" value="&nbsp;&rsaquo;&rsaquo;&nbsp;" onClick="ImportJs.copySelectedOptions('#available_fields', '#selected_merge_fields')" class="crmButton font-x-small importButton" /><br /><br />
										<input type="button" name="Button1" value="&nbsp;&lsaquo;&lsaquo;&nbsp;" onClick="ImportJs.removeSelectedOptions('#selected_merge_fields')" class="crmButton font-x-small importButton" /><br /><br />
									</div>
								</td>
								<td>
									<input type="hidden" id="merge_fields" size="10" name="merge_fields" value="" />
									<select id="selected_merge_fields" size="10" name="selected_merge_fields" multiple class="txtBox" style="width: 100%">
										<?php  $_smarty_tpl->tpl_vars['_FIELD_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_INFO']->key => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value){
$_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['_FIELD_INFO']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table><?php }} ?>