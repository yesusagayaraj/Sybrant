<?php /* Smarty version Smarty-3.1.7, created on 2016-07-29 10:40:12
         compiled from "C:\xampp\htdocs\vtigercrm_6.5\includes\runtime/../../layouts/vlayout\modules\Calendar\CalendarSharedUsers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18367579b328c2259f2-18415284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01f9144a0886f4b01d5a97aafe971447a983dc95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm_6.5\\includes\\runtime/../../layouts/vlayout\\modules\\Calendar\\CalendarSharedUsers.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18367579b328c2259f2-18415284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SHAREDUSERS_INFO' => 0,
    'CURRENTUSER_MODEL' => 0,
    'MODULE' => 0,
    'SHAREDUSERS' => 0,
    'USER_ID' => 0,
    'USER_NAME' => 0,
    'CURRENT_USER_ID' => 0,
    'ID' => 0,
    'USER' => 0,
    'INVISIBLE_CALENDAR_VIEWS_EXISTS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_579b328c3d02f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b328c3d02f')) {function content_579b328c3d02f($_smarty_tpl) {?>
<div name='calendarViewTypes'><?php $_smarty_tpl->tpl_vars['SHARED_USER_INFO'] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['CURRENT_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENTUSER_MODEL']->value->getId(), null, 0);?><div id="calendarview-feeds" style="margin-left:10px;"><!--Adding or Editing Users Modal in Shared Calendar--><div class="modal addViewsToCalendar hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_ADD_CALENDAR_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><div class="modal-body"><form class="form-horizontal"><input type="hidden" class="selectedUser" value="" /><input type="hidden" class="selectedUserColor" value="" /><input type="hidden" class="userCalendarMode" value="" /><div class="control-group addCalendarViewsList"><label class="control-label"><?php echo vtranslate('LBL_SELECT_USER_CALENDAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><select class="select2" name="usersCalendarList" style="min-width: 250px;"><?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHAREDUSERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['USER_ID']->value]['visible']=='0'){?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</option><?php }?><?php } ?></select></div></div><div class="control-group editCalendarViewsList"><label class="control-label"><?php echo vtranslate('LBL_EDITING_CALENDAR_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><select class="select2" name="editingUsersList" style="min-width: 250px;"><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
" data-user-color="<?php echo $_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value]['color'];?>
"><?php echo vtranslate('LBL_MINE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHAREDUSERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['USER_ID']->value]['visible']!='0'){?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</option><?php }?><?php } ?></select></div></div><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_SELECT_CALENDAR_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><p class="calendarColorPicker"></p></div></div></form></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><!--Adding or Editing Users Modal in Shared Calendar--><div class="labelModal hide"><label class="checkbox addedCalendars" style="text-shadow: none"><input type="checkbox" />&nbsp;<span class="label" style="text-shadow: none"></span>&nbsp;<i class="icon-pencil editCalendarColor cursorPointer actionImage" title="<?php echo vtranslate('LBL_EDIT_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>&nbsp;<i class="icon-trash cursorPointer actionImage deleteCalendarView" title="<?php echo vtranslate('LBL_DELETE_CALENDAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></label></div><input type="hidden" class="sharedUsersInfo" value= <?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value);?>
 /><label class="checkbox addedCalendars" style="text-shadow: none"><input type="checkbox" data-calendar-sourcekey="Events33_<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
" data-calendar-feed="Events"data-calendar-userid="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
" data-calendar-feed-color="<?php echo $_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value]['color'];?>
" >&nbsp;<span class="label" style="text-shadow: none; background-color: <?php echo $_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value]['color'];?>
;"><?php echo vtranslate('LBL_MINE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>&nbsp;<i class="icon-pencil editCalendarColor cursorPointer actionImage" title="<?php echo vtranslate('LBL_EDIT_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></label><?php $_smarty_tpl->tpl_vars['INVISIBLE_CALENDAR_VIEWS_EXISTS'] = new Smarty_variable('false', null, 0);?><?php  $_smarty_tpl->tpl_vars['USER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHAREDUSERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER']->key => $_smarty_tpl->tpl_vars['USER']->value){
$_smarty_tpl->tpl_vars['USER']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['USER']->key;
?><?php if ($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['ID']->value]['visible']!='0'){?><label class="checkbox addedCalendars"><input type="checkbox" data-calendar-sourcekey="Events33_<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" data-calendar-feed="Events" data-calendar-userid="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" data-calendar-feed-color="<?php echo $_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['ID']->value]['color'];?>
">&nbsp;<span class="label" style="text-shadow: none; background-color: <?php echo $_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['ID']->value]['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</span>&nbsp;<i class="icon-pencil editCalendarColor cursorPointer actionImage" title="<?php echo vtranslate('LBL_EDIT_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>&nbsp;<i class="icon-trash cursorPointer actionImage deleteCalendarView" title="<?php echo vtranslate('LBL_DELETE_CALENDAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></label><?php }else{ ?><?php $_smarty_tpl->tpl_vars['INVISIBLE_CALENDAR_VIEWS_EXISTS'] = new Smarty_variable('true', null, 0);?><?php }?><?php } ?><input type="hidden" class="invisibleCalendarViews" value="<?php echo $_smarty_tpl->tpl_vars['INVISIBLE_CALENDAR_VIEWS_EXISTS']->value;?>
" /></div></div>
<script type="text/javascript">
jQuery(document).ready(function() {
	SharedCalendar_SharedCalendarView_Js.initiateCalendarFeeds();
});
</script><?php }} ?>