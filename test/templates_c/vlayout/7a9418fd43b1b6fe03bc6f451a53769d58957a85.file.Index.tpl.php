<?php /* Smarty version Smarty-3.1.7, created on 2016-07-29 10:42:50
         compiled from "C:\xampp\htdocs\vtigercrm_6.5\includes\runtime/../../layouts/vlayout\modules\Settings\Roles\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11824579b332a387d41-27418867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a9418fd43b1b6fe03bc6f451a53769d58957a85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm_6.5\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Roles\\Index.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11824579b332a387d41-27418867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'ROOT_ROLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_579b332a47b94',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b332a47b94')) {function content_579b332a47b94($_smarty_tpl) {?>
<div class="container-fluid"><div class="widget_header row-fluid"><div class="span8"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr><div class="clearfix treeView"><ul><li data-role="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getId();?>
"><div class="toolbar-handle"><a href="javascript:;" class="btn btn-inverse draggable droppable"><?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getName();?>
</a><div class="toolbar" title="<?php echo vtranslate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getCreateChildUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getCreateChildUrl();?>
" data-action="modal"><span class="icon-plus-sign"></span></a></div></div><?php $_smarty_tpl->tpl_vars["ROLE"] = new Smarty_variable($_smarty_tpl->tpl_vars['ROOT_ROLE']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("RoleTree.tpl","Settings:Roles"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li></ul></div></div><?php }} ?>