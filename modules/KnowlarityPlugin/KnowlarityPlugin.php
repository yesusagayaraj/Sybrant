<?php
/***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

include_once 'modules/Vtiger/CRMEntity.php';

class KnowlarityPlugin extends Vtiger_CRMEntity {
	var $table_name = 'vtiger_knowlarityplugin';
	var $table_index= 'knowlaritypluginid';

	/**
	 * Mandatory table for supporting custom fields.
	 */
	var $customFieldTable = Array('vtiger_knowlarityplugincf', 'knowlaritypluginid');

	/**
	 * Mandatory for Saving, Include tables related to this module.
	 */
	var $tab_name = Array('vtiger_crmentity', 'vtiger_knowlarityplugin', 'vtiger_knowlarityplugincf');

	/**
	 * Mandatory for Saving, Include tablename and tablekey columnname here.
	 */
	var $tab_name_index = Array(
		'vtiger_crmentity' => 'crmid',
		'vtiger_knowlarityplugin' => 'knowlaritypluginid',
		'vtiger_knowlarityplugincf'=>'knowlaritypluginid');

	/**
	 * Mandatory for Listing (Related listview)
	 */
	var $list_fields = Array (
			'Name' => Array('knowlarityplugin', 'k_acc_name'),
		'Assigned To' => Array('crmentity','smownerid')
	);
	var $list_fields_name = Array (
			'Name' => 'k_acc_name',
		'Assigned To' => 'assigned_user_id',
	);

	// Make the field link to detail view
	var $list_link_field = 'k_acc_name';

	// For Popup listview and UI type support
	var $search_fields = Array(
			'Name' => Array('knowlarityplugin', 'k_acc_name'),
		'Assigned To' => Array('vtiger_crmentity','assigned_user_id'),
	);
	var $search_fields_name = Array (
			'Name' => 'k_acc_name',
		'Assigned To' => 'assigned_user_id',
	);

	// For Popup window record selection
	var $popup_fields = Array ('k_acc_name');

	// For Alphabetical search
	var $def_basicsearch_col = 'k_acc_name';

	// Column value to use on detail view record text display
	var $def_detailview_recname = 'k_acc_name';

	// Used when enabling/disabling the mandatory fields for the module.
	// Refers to vtiger_field.fieldname values.
	var $mandatory_fields = Array('k_acc_name','assigned_user_id');

	var $default_order_by = 'k_acc_name';
	var $default_sort_order='ASC';

	function KnowlarityPlugin() {
		$this->log =LoggerManager::getLogger('KnowlarityPlugin');
		$this->db = PearDatabase::getInstance();
		$this->column_fields = getColumnFields('KnowlarityPlugin');
	}

	/**
	* Invoked when special actions are performed on the module.
	* @param String Module name
	* @param String Event Type
	*/
	function vtlib_handler($moduleName, $eventType) {
 		if($eventType == 'module.postinstall') {
 			//Enable ModTracker for the module
 			$this->_registerLinks($moduleName);
 			static::enableModTracker($moduleName);
		} else if($eventType == 'module.disabled') {
			$this->_deregisterLinks($moduleName);
			// TODO Handle actions before this module is being uninstalled.
		} else if($eventType == 'module.preuninstall') {
			// TODO Handle actions when this module is about to be deleted.
		} else if($eventType == 'module.preupdate') {
			// TODO Handle actions before this module is updated.
		} else if($eventType == 'module.postupdate') {
			$this->_registerLinks($moduleName);
			// TODO Handle actions after this module is updated.
		} else if($eventType == 'module.enabled') {
			$this->_registerLinks($moduleName);
			// TODO Handle actions after this module is updated.
		}
 	}
 	protected function _registerLinks($moduleName) {
        $thisModuleInstance = Vtiger_Module::getInstance($moduleName);
        if ($thisModuleInstance) {
            $thisModuleInstance->addLink("HEADERSCRIPT", "Knowlarity Phone", "modules/KnowlarityPlugin/js/knowlarity.js");
            $thisModuleInstance->addLink("HEADERSCRIPT", "Knowlarity Phone API", "modules/KnowlarityPlugin/js/WSClient.js");
            $thisModuleInstance->addLink("HEADERSCRIPT", "Knowlarity Phone md5", "modules/KnowlarityPlugin/js/Vtiger_md5.js");
            $thisModuleInstance->addLink("HEADERSCRIPT", "Knowlarity Phone noty", "modules/KnowlarityPlugin/js/noty.js");
        
        }
    }

    protected function _deregisterLinks($moduleName) {
        $thisModuleInstance = Vtiger_Module::getInstance($moduleName);
        if ($thisModuleInstance) {
            $thisModuleInstance->deleteLink("HEADERSCRIPT", "Knowlarity Phone", "modules/KnowlarityPlugin/js/knowlarity.js");
            $thisModuleInstance->deleteLink("HEADERSCRIPT", "Knowlarity Phone API", "modules/KnowlarityPlugin/js/WSClient.js");
            $thisModuleInstance->deleteLink("HEADERSCRIPT", "Knowlarity Phone md5", "modules/KnowlarityPlugin/js/Vtiger_md5.js");
            $thisModuleInstance->deleteLink("HEADERSCRIPT", "Knowlarity Phone noty", "modules/KnowlarityPlugin/js/noty.js");

        }
    }
	
	
	/**
	 * Enable ModTracker for the module
	 */
	public static function enableModTracker($moduleName)
	{
		include_once 'vtlib/Vtiger/Module.php';
		include_once 'modules/ModTracker/ModTracker.php';
			
		//Enable ModTracker for the module
		$moduleInstance = Vtiger_Module::getInstance($moduleName);
		ModTracker::enableTrackingForModule($moduleInstance->getId());
	}
}
