<?php /* Smarty version Smarty-3.1.7, created on 2016-08-18 09:26:19
         compiled from "/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/UnifiedSearchResults.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38249205557b57f3b585489-35161834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0be029c25219a07cf81c653bc9b6579bdfded259' => 
    array (
      0 => '/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/UnifiedSearchResults.tpl',
      1 => 1470736422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38249205557b57f3b585489-35161834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MATCHING_RECORDS' => 0,
    'searchRecords' => 0,
    'totalCount' => 0,
    'modulesCount' => 0,
    'MODULE' => 0,
    'IS_ADVANCE_SEARCH' => 0,
    'SEARCH_MODULE' => 0,
    'module' => 0,
    'recordObject' => 0,
    'ID' => 0,
    'DETAILVIEW_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57b57f3b68cee',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b57f3b68cee')) {function content_57b57f3b68cee($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["totalCount"] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["totalModulesSearched"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['MATCHING_RECORDS']->value), null, 0);?><?php  $_smarty_tpl->tpl_vars['searchRecords'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['searchRecords']->_loop = false;
 $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MATCHING_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['searchRecords']->key => $_smarty_tpl->tpl_vars['searchRecords']->value){
$_smarty_tpl->tpl_vars['searchRecords']->_loop = true;
 $_smarty_tpl->tpl_vars['module']->value = $_smarty_tpl->tpl_vars['searchRecords']->key;
?><?php $_smarty_tpl->tpl_vars['modulesCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['searchRecords']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["totalCount"] = new Smarty_variable($_smarty_tpl->tpl_vars['totalCount']->value+$_smarty_tpl->tpl_vars['modulesCount']->value, null, 0);?><?php } ?><div class="globalSearchResults" style="max-width: 280px;"><div class="row-fluid"><div class="header highlightedHeader padding1per"><div class="row-fluid"><span class="span6"><strong><?php echo vtranslate('LBL_SEARCH_RESULTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
)</strong></span><?php if ($_smarty_tpl->tpl_vars['IS_ADVANCE_SEARCH']->value){?><span class="span6"><span class="pull-right"><a href="javascript:void(0);" id="showFilter"><?php echo vtranslate('LBL_SAVE_MODIFY_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span></span><?php }?></div></div><div class="contents"><?php if ($_smarty_tpl->tpl_vars['totalCount']->value==100){?><div class='alert alert-block'><button type=button class="close" data-dismiss="alert">&times;</button><?php if ($_smarty_tpl->tpl_vars['SEARCH_MODULE']->value){?><?php echo vtranslate('LBL_GLOBAL_SEARCH_MAX_MESSAGE_FOR_MODULE','Vtiger');?>
<?php }else{ ?><?php echo vtranslate('LBL_GLOBAL_SEARCH_MAX_MESSAGE','Vtiger');?>
<?php }?></div><?php }?><?php  $_smarty_tpl->tpl_vars['searchRecords'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['searchRecords']->_loop = false;
 $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MATCHING_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['matchingRecords']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['searchRecords']->key => $_smarty_tpl->tpl_vars['searchRecords']->value){
$_smarty_tpl->tpl_vars['searchRecords']->_loop = true;
 $_smarty_tpl->tpl_vars['module']->value = $_smarty_tpl->tpl_vars['searchRecords']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['matchingRecords']['index']++;
?><?php $_smarty_tpl->tpl_vars["modulesCount"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['searchRecords']->value), null, 0);?><label class="clearfix"><strong><?php echo vtranslate($_smarty_tpl->tpl_vars['module']->value);?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['modulesCount']->value;?>
)</strong><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['matchingRecords']['index']+1;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?><span class="pull-right"><p class="muted"><?php echo vtranslate('LBL_CREATED_ON',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</small></p></span><?php }?></label><ul class="nav"><?php  $_smarty_tpl->tpl_vars['recordObject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recordObject']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchRecords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['globalSearch']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['recordObject']->key => $_smarty_tpl->tpl_vars['recordObject']->value){
$_smarty_tpl->tpl_vars['recordObject']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['globalSearch']['index']++;
?><?php $_smarty_tpl->tpl_vars["ID"] = new Smarty_variable(($_smarty_tpl->tpl_vars['module']->value)."_globalSearch_row_".(($_smarty_tpl->getVariable('smarty')->value['foreach']['globalSearch']['index']+1)), null, 0);?><?php $_smarty_tpl->tpl_vars['DETAILVIEW_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['recordObject']->value->getDetailViewUrl(), null, 0);?><li id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"><a target="_blank" id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
_link" class="cursorPointer" <?php if (stripos($_smarty_tpl->tpl_vars['DETAILVIEW_URL']->value,'javascript:')===0){?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['DETAILVIEW_URL']->value,strlen("javascript:"));?>
' <?php }else{ ?> onclick='window.location.href="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEW_URL']->value;?>
"' <?php }?>><?php echo $_smarty_tpl->tpl_vars['recordObject']->value->getName();?>
<span id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
_time" class="pull-right" title="<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['recordObject']->value->get('createdtime'));?>
"><?php echo Vtiger_Util_Helper::formatDateDiffInStrings($_smarty_tpl->tpl_vars['recordObject']->value->get('createdtime'));?>
</span></a></li><?php }
if (!$_smarty_tpl->tpl_vars['recordObject']->_loop) {
?><li><?php echo vtranslate('LBL_NO_RECORDS',$_smarty_tpl->tpl_vars['module']->value);?>
</li><?php } ?></ul><?php } ?></div></div></div><?php }} ?>