<?php /* Smarty version Smarty-3.1.7, created on 2016-08-08 12:01:49
         compiled from "C:\xampp\htdocs\vtigercrm_6.5\includes\runtime/../../layouts/vlayout\modules\Import\ImportBasicStep.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2349357a874ad1ff542-78845304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c792f9c86d66776ab73e94de9ba9357f329aac69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm_6.5\\includes\\runtime/../../layouts/vlayout\\modules\\Import\\ImportBasicStep.tpl',
      1 => 1469709988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2349357a874ad1ff542-78845304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LEFTPANELHIDE' => 0,
    'FOR_MODULE' => 0,
    'MODULE' => 0,
    'ERROR_MESSAGE' => 0,
    'DUPLICATE_HANDLING_NOT_SUPPORTED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57a874ad2fd40',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a874ad2fd40')) {function content_57a874ad2fd40($_smarty_tpl) {?>
<div id="toggleButton" class="toggleButton" title="<?php echo vtranslate('LBL_LEFT_PANEL_SHOW_HIDE','Vtiger');?>
"><i id="tButtonImage" class="<?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value!='1'){?>icon-chevron-left<?php }else{ ?>icon-chevron-right<?php }?>"></i></div>&nbsp<div style="padding-left: 15px;"><form onsubmit="" action="index.php" enctype="multipart/form-data" method="POST" name="importBasic"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" /><input type="hidden" name="view" value="Import" /><input type="hidden" name="mode" value="uploadAndParse" /><table style=" width:90%;margin-left: 5% " class="searchUIBasic" cellspacing="12"><tr><td class="font-x-large" align="left" colspan="2"><strong><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</strong></td></tr><?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value!=''){?><tr><td class="style1" align="left" colspan="2"><span class="alert-error"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</span></td></tr><?php }?><tr><td class="leftFormBorder1 importContents" width="40%" valign="top"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Import_Step1.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><td class="leftFormBorder1 importContents" width="40%" valign="top"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Import_Step2.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr><?php if ($_smarty_tpl->tpl_vars['DUPLICATE_HANDLING_NOT_SUPPORTED']->value!='true'){?><tr><td class="leftFormBorder1 importContents" colspan="2" valign="top"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Import_Step3.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr><?php }?><tr><td align="right" colspan="2"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Import_Basic_Buttons.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr></table></form></div><?php }} ?>