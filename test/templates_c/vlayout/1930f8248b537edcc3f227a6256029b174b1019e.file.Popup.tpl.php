<?php /* Smarty version Smarty-3.1.7, created on 2016-08-02 10:45:17
         compiled from "C:\xampp\htdocs\vtigercrm_6.5\includes\runtime/../../layouts/vlayout\modules\Settings\Roles\Popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268457a079bd475c66-41072242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1930f8248b537edcc3f227a6256029b174b1019e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm_6.5\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Roles\\Popup.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268457a079bd475c66-41072242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COMPANY_LOGO' => 0,
    'ROOT_ROLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57a079bd56029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a079bd56029')) {function content_57a079bd56029($_smarty_tpl) {?>
<div id="popupPageContainer" class="popupContainer" style="min-height: 600px"><div class="popupContainer padding1per"><div class="row-fluid"><div class="span6"><span><h3><?php echo vtranslate('LBL_ASSIGN_ROLE',"Settings:Roles");?>
</h3></span></div><div class="span6 pull-right"><span class="logo pull-right" style="float: none"><img src="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('imagepath');?>
" title="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('title');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('alt');?>
"/></div></div><hr></div><div class="popupContainer row-fluid"><div class="clearfix treeView"><ul><li data-role="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getId();?>
"><div><a href="javascript:;" class="btn btn-inverse"><?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getName();?>
</a></div><?php $_smarty_tpl->tpl_vars["ROLE"] = new Smarty_variable($_smarty_tpl->tpl_vars['ROOT_ROLE']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("RoleTree.tpl","Settings:Roles"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li></ul></div></div></div><script type="text/javascript">jQuery('body').ready(function(){Settings_Roles_Js.initPopupView()});</script><?php }} ?>