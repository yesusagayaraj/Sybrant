<?php /* Smarty version Smarty-3.1.7, created on 2016-10-17 08:14:22
         compiled from "/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Settings/CustomerPortal/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4195675415804885ebc2da3-99606114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf95c0451892d50a6ba270a304e127df33f1e15' => 
    array (
      0 => '/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Settings/CustomerPortal/Index.tpl',
      1 => 1473916903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4195675415804885ebc2da3-99606114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'USER_MODELS' => 0,
    'USER_MODEL' => 0,
    'USER_ID' => 0,
    'CURRENT_PORTAL_USER' => 0,
    'CURRENT_DEFAULT_ASSIGNEE' => 0,
    'GROUP_MODELS' => 0,
    'GROUP_MODEL' => 0,
    'GROUP_ID' => 0,
    'PORTAL_URL' => 0,
    'MODULES_MODELS' => 0,
    'MODEL' => 0,
    'TAB_ID' => 0,
    'MODULE_NAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5804885ec9aa2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804885ec9aa2')) {function content_5804885ec9aa2($_smarty_tpl) {?>
<div class="container-fluid"><div class="widget_header"><h3><?php echo vtranslate('CustomerPortal',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr><div class="contents row-fluid"><form id="customerPortalForm" class="form-horizontal"><div class="row-fluid"><input type="hidden" name="portalModulesInfo" value="" /><div class="control-group"><label class="muted control-label"><?php echo vtranslate('LBL_PRIVILEGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls"><span class="row-fluid"><select name="privileges" class="select2 span3"><?php  $_smarty_tpl->tpl_vars['USER_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['USER_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_MODEL']->key => $_smarty_tpl->tpl_vars['USER_MODEL']->value){
$_smarty_tpl->tpl_vars['USER_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getId(), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CURRENT_PORTAL_USER']->value==$_smarty_tpl->tpl_vars['USER_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</option><?php } ?></select><span class="span1">&nbsp;</span><span class="span7"><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_PREVILEGES_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span1">&nbsp;</span></span></div></div><div class="control-group"><label class="muted control-label"><?php echo vtranslate('LBL_DEFAULT_ASSIGNEE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls"><span class="row-fluid"><select name="defaultAssignee" class="select2 span3"><optgroup style="border: none" label="<?php echo vtranslate('LBL_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" ><?php  $_smarty_tpl->tpl_vars['USER_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['USER_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_MODEL']->key => $_smarty_tpl->tpl_vars['USER_MODEL']->value){
$_smarty_tpl->tpl_vars['USER_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getId(), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CURRENT_DEFAULT_ASSIGNEE']->value==$_smarty_tpl->tpl_vars['USER_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</option><?php } ?></optgroup><optgroup style="border: none" label="<?php echo vtranslate('LBL_GROUPS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['GROUP_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GROUP_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_MODEL']->key => $_smarty_tpl->tpl_vars['GROUP_MODEL']->value){
$_smarty_tpl->tpl_vars['GROUP_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['GROUP_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['GROUP_MODEL']->value->getId(), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['GROUP_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CURRENT_DEFAULT_ASSIGNEE']->value==$_smarty_tpl->tpl_vars['GROUP_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['GROUP_MODEL']->value->getName();?>
</option><?php } ?></optgroup></select><span class="span1">&nbsp;</span><span class="span7"><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_DEFAULT_ASSIGNEE_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span1">&nbsp;</span></span></div></div><div class="control-group"><label class="muted control-label"><?php echo vtranslate('LBL_PORTAL_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls"><span class="row-fluid"><span class="span4 pushDownHalfper"><a class="alignBottom" href="<?php echo $_smarty_tpl->tpl_vars['PORTAL_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PORTAL_URL']->value;?>
</a></span><span class="span7"><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_PORTAL_URL_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span1">&nbsp;</span></span></div></div><div><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_DRAG_AND_DROP_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><br><table id="portalModulesTable" class="table table-bordered table-condensed themeTableColor"><thead><tr class="blockHeader"><th><?php echo vtranslate('LBL_MODULE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_ENABLE_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_VIEW_ALL_RECORDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TAB_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULES_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->key => $_smarty_tpl->tpl_vars['MODEL']->value){
$_smarty_tpl->tpl_vars['MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TAB_ID']->value = $_smarty_tpl->tpl_vars['MODEL']->key;
?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODEL']->value->get('name'), null, 0);?><tr class="portalModuleRow" data-id="<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('sequence');?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><input type="hidden" name="portalModulesInfo[<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
][sequence]" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('sequence');?>
" /><td><div class="row-fluid"><span class="span1">&nbsp;</span><span class="span1"><a><img src="<?php echo vimage_path('drag.png');?>
" border="0" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></a></span><span class="span10"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></div></td><td><input type="hidden" name="portalModulesInfo[<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
][visible]" value="0" /><input type="checkbox" name="portalModulesInfo[<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
][visible]" value="1" <?php if ($_smarty_tpl->tpl_vars['MODEL']->value->get('visible')=='1'){?> checked <?php }?>/></td><td><label class="radio inline"><input type="radio" name="portalModulesInfo[<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
][prefValue]" value="1" <?php if ($_smarty_tpl->tpl_vars['MODEL']->value->get('prefvalue')=='1'){?> checked="checked" <?php }?>/>&nbsp;<?php echo vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="radio inline"><input type="radio" name="portalModulesInfo[<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
][prefValue]" value="0" <?php if ($_smarty_tpl->tpl_vars['MODEL']->value->get('prefvalue')=='0'){?> checked="checked" <?php }?>/>&nbsp;<?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td></tr><?php } ?></tbody></table></div><div class="row-fluid"><div class="span6 padding1per"><button class="btn btn-success pull-right" type="submit" disabled="true" name="savePortalInfo"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="span6">&nbsp;</div></div></form></div></div>
<?php }} ?>