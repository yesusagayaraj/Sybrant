

<?php

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



   if($ip =='183.82.33.251')

   {

	 echo "Yes";

	
	
	 

   }

   else

   {

     echo "No";
      $to = "natesan.v@sybrant.com";

	 $content = "you have access '".$ip."'";

	 $fromaddress = "noreply@sybrant.com";

$subject = "CRM ACCESS";

$body = $content;

$headers = "From: $fromaddress\r\n" .

    "X-Mailer: php";

if (mail($to, $subject, $body, $headers)) {

 echo("<p>Message sent!</p>");

 } else {

  echo("<p>Message delivery failed...</p>");

 }	

   }

   

   





?>
