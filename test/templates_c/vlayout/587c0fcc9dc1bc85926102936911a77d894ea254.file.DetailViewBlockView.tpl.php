<?php /* Smarty version Smarty-3.1.7, created on 2016-08-11 05:29:08
         compiled from "/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Events/DetailViewBlockView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86660447057ac0d24845629-66320901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '587c0fcc9dc1bc85926102936911a77d894ea254' => 
    array (
      0 => '/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Events/DetailViewBlockView.tpl',
      1 => 1470736418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86660447057ac0d24845629-66320901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_MODEL' => 0,
    'RECORD_STRUCTURE' => 0,
    'MODULE_NAME' => 0,
    'IS_HIDDEN' => 0,
    'WIDTHTYPE' => 0,
    'ACCESSIBLE_USERS' => 0,
    'USER_ID' => 0,
    'INVITIES_SELECTED' => 0,
    'USER_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57ac0d248bd99',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac0d248bd99')) {function content_57ac0d248bd99($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
<?php $_smarty_tpl->tpl_vars["IS_HIDDEN"] = new Smarty_variable(false, null, 0);?><table class="table table-bordered equalSplit detailview-table"><thead><tr><th class="blockHeader" colspan="4"><img class="cursorPointer alignMiddle blockToggle <?php if (!($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)){?> hide <?php }?> "  src="<?php echo vimage_path('arrowRight.png');?>
" data-mode="hide" data-id='INVITE_USER_BLOCK_ID'><img class="cursorPointer alignMiddle blockToggle <?php if (($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)){?> hide <?php }?>"  src="<?php echo vimage_path('arrowDown.png');?>
" data-mode="show" data-id='INVITE_USER_BLOCK_ID'>&nbsp;&nbsp;<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo vtranslate('LBL_INVITE_USER_BLOCK',$_tmp1);?>
</th></tr></thead><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_INVITE_USERS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACCESSIBLE_USERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?><?php if (in_array($_smarty_tpl->tpl_vars['USER_ID']->value,$_smarty_tpl->tpl_vars['INVITIES_SELECTED']->value)){?><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
<br><?php }?><?php } ?></td></tr></table><?php }} ?>