<?php
session_start();
include_once 'include/Webservices/Query.php';
include_once 'include/Webservices/Utils.php';

class KnowlarityPlugin_Details_Action extends Vtiger_Action_Controller {
    public function checkPermission() {
            return true;
        }
    public function process(Vtiger_Request $request) {
        $userid = $request->get(id);
        $wsuserid = vtws_getWebserviceEntityId('Users', $userid);
        $wsKnowlarityPluginid = vtws_getWebserviceEntityId('KnowlarityPlugin','');
        $userContext = vglobal('current_user');

        $q = "select user_name,accesskey from Users where id= ".$wsuserid;
        $q = $q . ";"; // NOTE: Make sure to terminate query with ;
        $name_records = vtws_query($q, $userContext);
        $timea = vtws_query("select time_zone from Users where id= ".$wsuserid.";", $userContext);
        $details = 'select k_api_key,k_number from KnowlarityPlugin order by modifiedtime DESC LIMIT 1;';
        $apiKey_records = vtws_query($details, $userContext);
        $_SESSION['key'] = $apiKey_records[0]['k_api_key'];
        $_SESSION['number'] = $apiKey_records[0]['k_number'];
        $_SESSION['user_name'] = $name_records[0]['user_name'];
        $_SESSION['accessKey'] = $name_records[0]['accesskey'];
        $_SESSION['tz'] = $timea[0]['time_zone'];
        $data = array('result' => 'saved');
        $data = array('response' => $_SESSION['key'].",".$_SESSION['number'].",".$_SESSION['user_name'].",".$_SESSION['accessKey'].",".$_SESSION['tz']);
        $response = new Vtiger_Response();
        $response->setResult(array('feed' => $data));
        return $response;
        }
}
