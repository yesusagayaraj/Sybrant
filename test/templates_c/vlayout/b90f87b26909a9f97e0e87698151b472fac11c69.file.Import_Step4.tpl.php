<?php /* Smarty version Smarty-3.1.7, created on 2016-08-10 09:17:49
         compiled from "/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Import/Import_Step4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213343529857aaf13d80b246-54788571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b90f87b26909a9f97e0e87698151b472fac11c69' => 
    array (
      0 => '/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Import/Import_Step4.tpl',
      1 => 1470736419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213343529857aaf13d80b246-54788571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HAS_HEADER' => 0,
    'ROW_1_DATA' => 0,
    '_COUNTER' => 0,
    '_HEADER_NAME' => 0,
    '_FIELD_VALUE' => 0,
    'FOR_MODULE' => 0,
    'AVAILABLE_FIELDS' => 0,
    '_FIELD_INFO' => 0,
    '_FIELD_NAME' => 0,
    '_TRANSLATED_FIELD_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57aaf13d85bc0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aaf13d85bc0')) {function content_57aaf13d85bc0($_smarty_tpl) {?>

<table width="100%" cellspacing="0" cellpadding="10" class="importContents">
	<tr>
		<td>
			<strong><?php echo vtranslate('LBL_IMPORT_STEP_4',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong>
		</td>
		<td>
			<span class="big"><?php echo vtranslate('LBL_IMPORT_STEP_4_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
		</td>
		<td>
            <div id="savedMapsContainer" class="textAlignRight pull-right">
				<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Import_Saved_Maps.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
        </td>
	</tr>
	<tr>
		<td>&nbsp;</td>
        <td colspan="2">
			<input type="hidden" name="field_mapping" id="field_mapping" value="" />
			<input type="hidden" name="default_values" id="default_values" value="" />
			<table width="100%" cellspacing="0" cellpadding="2" class="listRow table table-bordered table-condensed listViewEntriesTable">
				<thead>
					<tr class="listViewHeaders">
						<?php if ($_smarty_tpl->tpl_vars['HAS_HEADER']->value==true){?>
						<th width="25%"><a><?php echo vtranslate('LBL_FILE_COLUMN_HEADER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></th>
						<?php }?>
						<th width="25%"><a><?php echo vtranslate('LBL_ROW_1',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></th>
						<th width="23%"><a><?php echo vtranslate('LBL_CRM_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></th>
						<th width="27%"><a><?php echo vtranslate('LBL_DEFAULT_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['_FIELD_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FIELD_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['_HEADER_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROW_1_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["headerIterator"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_VALUE']->key => $_smarty_tpl->tpl_vars['_FIELD_VALUE']->value){
$_smarty_tpl->tpl_vars['_FIELD_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['_HEADER_NAME']->value = $_smarty_tpl->tpl_vars['_FIELD_VALUE']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["headerIterator"]['iteration']++;
?>
					<?php $_smarty_tpl->tpl_vars["_COUNTER"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['headerIterator']['iteration'], null, 0);?>
					<tr class="fieldIdentifier" id="fieldIdentifier<?php echo $_smarty_tpl->tpl_vars['_COUNTER']->value;?>
">
						<?php if ($_smarty_tpl->tpl_vars['HAS_HEADER']->value==true){?>
						<td class="cellLabel">
							<span name="header_name"><?php echo $_smarty_tpl->tpl_vars['_HEADER_NAME']->value;?>
</span>
						</td>
						<?php }?>
						<td class="cellLabel">
							<span><?php echo textlength_check($_smarty_tpl->tpl_vars['_FIELD_VALUE']->value);?>
</span>
						</td>
						<td class="cellLabel">
							<input type="hidden" name="row_counter" value="<?php echo $_smarty_tpl->tpl_vars['_COUNTER']->value;?>
" />
							<select name="mapped_fields" class="txtBox chzn-select" style="width: 100%" onchange="ImportJs.loadDefaultValueWidget('fieldIdentifier<?php echo $_smarty_tpl->tpl_vars['_COUNTER']->value;?>
')">
								<option value=""><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option>
								<?php  $_smarty_tpl->tpl_vars['_FIELD_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AVAILABLE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_INFO']->key => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value){
$_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['_FIELD_INFO']->key;
?>
								<?php $_smarty_tpl->tpl_vars["_TRANSLATED_FIELD_LABEL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value), null, 0);?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
" <?php if (decode_html($_smarty_tpl->tpl_vars['_HEADER_NAME']->value)==$_smarty_tpl->tpl_vars['_TRANSLATED_FIELD_LABEL']->value){?> selected <?php }?> data-label="<?php echo $_smarty_tpl->tpl_vars['_TRANSLATED_FIELD_LABEL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_TRANSLATED_FIELD_LABEL']->value;?>
<?php if ($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->isMandatory()=='true'){?>&nbsp; (*)<?php }?></option>
								<?php } ?>
							</select>
						</td>
						<td class="cellLabel row-fluid" name="default_value_container">&nbsp;</td>
					</tr>
					<?php } ?>
			</tbody>
			</table>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
        <td align="right" colspan="2">
            <input type="checkbox" name="save_map" id="save_map"/>&nbsp;<?php echo vtranslate('LBL_SAVE_AS_CUSTOM_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;
            <input type="text" name="save_map_as" id="save_map_as"/>
		</td>
	</tr>
</table>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Import_Default_Values_Widget.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>