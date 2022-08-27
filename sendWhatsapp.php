<?php 
require_once './vendor/autoload.php'; 

use Twilio\Rest\Client;


if(isset($_POST['newCode']))

    $newCode = $_POST['newCode'];
    $oldCode = $_POST['oldCode'];
    $oldCat = $_POST['oldCat'];
    $newCat = $_POST['newCat'];
    

    $sid    = "AC1219acda5ab99ae58586681a555e5501"; 
    $token  = "a282fbdf6d6f6e072d102c64dbc8276b"; 
    $twilio = new Client($sid, $token); 
     
    $message = $twilio->messages 
                      ->create("whatsapp:+971509892426", // to 
                               array( 
                                   "from" => "whatsapp:+14155238886",       
                                   "body" => "Old code = ".$oldCode." New code = ".$newCode 
                               ) 
                      ); 
     
    print($message->sid);
    ?>