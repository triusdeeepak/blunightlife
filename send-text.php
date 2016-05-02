<?php
	ini_set('display_errors', 1);
 	// Get the PHP helper library from twilio.com/docs/php/install
	
	include("inc/config.php");
	include("inc/functions.php");
	// Your Account Sid and Auth Token from twilio.com/user/account
	$sid = "ACd1c27de9179514417e58e46ddc743509"; 
	$token = "d1e08897be46ead6ad2bd14ec35edd4e"; 
	$mobilephone = "";
	
	
	$db = new mysqli($config['dbHost'], $config['dbUser'], $config['dbPassword'],$config['dbName']);
	if($result = $db->query("SELECT * from Guest where Guest_ID=".$_GET['guest_id'].""))
	{	
		$result=$result->fetch_assoc();
		sendTextToGuest($result);
	}
	
	
     
    function sendTextToGuest($guest) {
    	require_once('inc/twilio/Services/Twilio.php'); // Loads the library
    	$sid = "ACd1c27de9179514417e58e46ddc743509"; 
		$token = "d1e08897be46ead6ad2bd14ec35edd4e"; 
    	$client = new Services_Twilio($sid, $token);
     	$additionalGuest = getAdditionalGuests($guest['Guest_ID']);
	    $sms = "Hi " . $guest['Guest_FirstName'] . ", you and " . count($additionalGuest) . " friends have been placed on the Guestlist for W Lounge on " . $guest['Guest_DateTime'] . ". Thank you for using Blu Nightlife.";
	    
		try {
			$client->account->messages->sendMessage("Blu", trim($guest['Guest_PhoneNumber']), $sms);
			sendTextToAdditionalGuests($additionalGuest, $guest);
			//sendmail();
			header("Location: .");
		} catch (Services_Twilio_RestException $e) { 
	            
	             echo $e->getMessage();
	    }
     }
     
     function sendTextToAdditionalGuests($additionalGuest, $guest) {
     	require_once('inc/twilio/Services/Twilio.php'); // Loads the library
     	$sid = "ACd1c27de9179514417e58e46ddc743509"; 
	 	$token = "d1e08897be46ead6ad2bd14ec35edd4e"; 
    	$client = new Services_Twilio($sid, $token);
	     foreach ($additionalGuest as $addGuest) {
		     $sms = "Hi " . $addGuest['AdditionalGuest_FirstName'] . ", you have been placed on " . $guest['Guest_FirstName'] . "'s Guestlist for W Lounge on " . $guest['Guest_DateTime'] . ". Thank you for using Blu Nightlife.";
	    
			try {
				$client->account->messages->sendMessage("Blu", trim($addGuest['AdditionalGuest_MobileNumber']), $sms);
			} catch (Services_Twilio_RestException $e) { 
		            
		             $form_message = $e->getMessage();
		    }
	     }
     }
		
?>