<?php /* Smarty version Smarty-3.1.7, created on 2016-09-15 06:53:00
         compiled from "/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Settings/Roles/RoleTree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65791758157da454c081b04-34162536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35adf16c87ee2aa7b7056195df534f0016f11c73' => 
    array (
      0 => '/home/sybrantdigital/public_html/cf/includes/runtime/../../layouts/vlayout/modules/Settings/Roles/RoleTree.tpl',
      1 => 1473916903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65791758157da454c081b04-34162536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROLE' => 0,
    'CHILD_ROLE' => 0,
    'VIEW_NAME' => 0,
    'VIEW_TYPE' => 0,
    'SOURCE_ROLE' => 0,
    'SOURCE_ROLE_SUBPATTERN' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57da454c0dc21',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57da454c0dc21')) {function content_57da454c0dc21($_smarty_tpl) {?>
<ul><?php  $_smarty_tpl->tpl_vars['CHILD_ROLE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CHILD_ROLE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ROLE']->value->getChildren(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CHILD_ROLE']->key => $_smarty_tpl->tpl_vars['CHILD_ROLE']->value){
$_smarty_tpl->tpl_vars['CHILD_ROLE']->_loop = true;
?><li data-role="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getId();?>
"><?php ob_start();?><?php echo getPurifiedSmartyParameters('view');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['VIEW_NAME'] = new Smarty_variable($_tmp1, null, 0);?><?php ob_start();?><?php echo getPurifiedSmartyParameters('type');?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['VIEW_TYPE'] = new Smarty_variable($_tmp2, null, 0);?><div <?php if ($_smarty_tpl->tpl_vars['VIEW_NAME']->value!='Popup'){?>class="toolbar-handle"<?php }?>><?php if ($_smarty_tpl->tpl_vars['VIEW_TYPE']->value=='Transfer'){?><?php $_smarty_tpl->tpl_vars["SOURCE_ROLE_SUBPATTERN"] = new Smarty_variable(('::').($_smarty_tpl->tpl_vars['SOURCE_ROLE']->value->getId()), null, 0);?><?php if (strpos($_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getParentRoleString(),$_smarty_tpl->tpl_vars['SOURCE_ROLE_SUBPATTERN']->value)!==false){?><?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName();?>
<?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" class="btn roleEle" rel="tooltip" ><?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName();?>
</a><?php }?><?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" class="btn draggable droppable" rel="tooltip" title="<?php echo vtranslate('LBL_CLICK_TO_EDIT_OR_DRAG_TO_MOVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName();?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['VIEW_NAME']->value!='Popup'){?><div class="toolbar">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getCreateChildUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getCreateChildUrl();?>
" title="<?php echo vtranslate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="icon-plus-sign"></span></a>&nbsp;<a data-id="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getId();?>
" href="javascript:;" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getDeleteActionUrl();?>
" data-action="modal" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="icon-trash"></span></a></div><?php }?></div><?php $_smarty_tpl->tpl_vars["ROLE"] = new Smarty_variable($_smarty_tpl->tpl_vars['CHILD_ROLE']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("RoleTree.tpl","Settings:Roles"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li><?php } ?></ul><?php }} ?>