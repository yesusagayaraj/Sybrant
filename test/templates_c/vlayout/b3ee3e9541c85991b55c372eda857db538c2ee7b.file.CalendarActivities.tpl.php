<?php /* Smarty version Smarty-3.1.7, created on 2016-08-23 12:31:29
         compiled from "/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/CalendarActivities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22908780757bc42211196a7-89972063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3ee3e9541c85991b55c372eda857db538c2ee7b' => 
    array (
      0 => '/var/www/html/sybrant_crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/CalendarActivities.tpl',
      1 => 1470736445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22908780757bc42211196a7-89972063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
    'CURRENTUSER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57bc42211a293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc42211a293')) {function content_57bc42211a293($_smarty_tpl) {?>

<div class="dashboardWidgetHeader">
	<table width="100%" cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<th class="span4">
				<div class="dashboardTitle" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><b>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle());?>
</b></div>
			</th>
			<th class="span2">
				<div>
					<select class="widgetFilter" name="type" style='width:100px;margin-bottom:0px'>
						<option value="<?php echo $_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId();?>
"><?php echo vtranslate('LBL_MINE');?>
</option>
						<option value="all"><?php echo vtranslate('LBL_ALL');?>
</option>
					</select>
				</div>
			</th>
			<th class="refresh span1" align="right">
				<span style="position:relative;"></span>
			</th>
			<th class="widgeticons span5" align="right">
				<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardHeaderIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</th>
		</tr>
	</thead>
	</table>
</div>
<div name="history" class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/CalendarActivitiesContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('WIDGET'=>$_smarty_tpl->tpl_vars['WIDGET']->value), 0);?>

</div>



<script type='text/javascript'>
	$(document).ready(function(){
        jQuery('.dashboardWidgetContent').off('click', 'a[name="history_more"]');
		jQuery('.dashboardWidgetContent').on('click', 'a[name="history_more"]', function(e) {
                var element = jQuery(e.currentTarget);
                var parent = jQuery(e.delegateTarget).closest('.dashboardWidget');
                jQuery(parent).find('.slimScrollDiv').css('overflow','visible');
                var type = parent.find("[name='type']").val();
                var url = element.data('url')+'&content=true&type='+type;
                AppConnector.request(url).then(function(data) {
                    jQuery(parent).find('.dashboardWidgetContent').append(data);
                    element.parent().remove();
                });
		});
	});
</script><?php }} ?>