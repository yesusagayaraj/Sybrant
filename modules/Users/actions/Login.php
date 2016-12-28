<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

class Users_Login_Action extends Vtiger_Action_Controller {

	function loginRequired() {
		return false;
	}
        
        
        function checkPermission(Vtiger_Request $request) {  
               return true;  
        } 

	function process(Vtiger_Request $request) {
		$username = $request->get('username');
		$password = $request->getRaw('password');

		$user = CRMEntity::getInstance('Users');
		$user->column_fields['user_name'] = $username;
		
		if ($user->doLogin($password)) {
			session_regenerate_id(true); // to overcome session id reuse.

			$userid = $user->retrieve_user_id($username);
			Vtiger_Session::set('AUTHUSERID', $userid);

			// For Backward compatability
			// TODO Remove when switch-to-old look is not needed
			$_SESSION['authenticated_user_id'] = $userid;
			$_SESSION['app_unique_key'] = vglobal('application_unique_key');
			$_SESSION['authenticated_user_language'] = vglobal('default_language');
            
            		//Enabled session variable for KCFINDER 
            		$_SESSION['KCFINDER'] = array(); 
            		$_SESSION['KCFINDER']['disabled'] = false; 
            		$_SESSION['KCFINDER']['uploadURL'] = "test/upload"; 
            		$_SESSION['KCFINDER']['uploadDir'] = "../test/upload";
			$deniedExts = implode(" ", vglobal('upload_badext'));
			$_SESSION['KCFINDER']['deniedExts'] = $deniedExts;
			// End

			//Track the login History
			$moduleModel = Users_Module_Model::getInstance('Users');
			$moduleModel->saveLoginHistory($user->column_fields['user_name']);
			//End
            		
              if(isset($_SESSION['return_params'])){ 
					$return_params = $_SESSION['return_params'];
				}
			$this->sendNotification($request);
			header ('Location: index.php?module=Users&parent=Settings&view=SystemSetup');
			exit();
		} else {
			header ('Location: index.php?module=Users&parent=Settings&view=Login&error=1');
			exit;
		}
	}


	function sendNotification($request) {
		

 		global $adb;
		 $username = $request->get('username');
		$accquery ="SELECT * FROM vtiger_users WHERE user_name = ?";  
                $userDetails = $adb->pquery($accquery, array($username));
                
                $count = $adb->num_rows($userDetails);
                  
                  for($i=0;$i<$count;$i++){
                      
                      $firstname = $adb->query_result($userDetails, $i,'first_name');
                      $lastname = $adb->query_result($userDetails, $i,'last_name');
                      $username = $adb->query_result($userDetails, $i,'user_name');
                      $name = $firstname.' ' .$lastname; 
                      $email = $adb->query_result($userDetails, $i,'email1');
                     
                  }
              
		 $ipaddress = '';
			    if ($_SERVER['HTTP_CLIENT_IP'])
				$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
			    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
				$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
			    else if($_SERVER['HTTP_X_FORWARDED'])
				$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
			    else if($_SERVER['HTTP_FORWARDED_FOR'])
				$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
			    else if($_SERVER['HTTP_FORWARDED'])
				$ipaddress = $_SERVER['HTTP_FORWARDED'];
			    else if($_SERVER['REMOTE_ADDR'])
				$ipaddress = $_SERVER['REMOTE_ADDR'];
			    else
				$ipaddress = 'UNKNOWN';
			 
			    $ip =$ipaddress;



			  if($ip !='183.82.33.251' && $ip !='171.49.178.200' )

			   {

				$to = $email1;
				//$fromaddress = "noreply@sybrant.com";
				  $content ="User Name : $username";
				  $content .="\n";
				  
				  $content .="Name : $name";
				  $content .="\n";
				  $content .= "you have access IP : $ip";
				  $content .="\n";
				  $to = "$email";
				  $subject = "CRM ACCESS";

				  $body = $content;


				  //$headers = "From: $fromaddress\r\n" ."CC: yesusagayaraj.l@sybrant.com";

   // "X-Mailer: php";
			$headers = "From: noreply@sybrant.com" . "\r\n" .
"CC:yesusagayaraj.l@sybrant.com";
	
				mail($to, $subject, $body, $headers);
				 
}
			}
	
		}
