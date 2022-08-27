<?php 
require ('./mailer.php');
require_once './vendor/autoload.php'; 

use Twilio\Rest\Client;




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
    

if(isset($_POST['newCode'])){

    $newCode = $_POST['newCode'];
    $oldCode = $_POST['oldCode'];
    $oldCat = $_POST['oldCat'];
    $newCat = $_POST['newCat'];


    //send Email
$html = "<div>
        Dear admin, <br/>
        Please note the following modifyication has been requested:<br/>
        <table width='100%' border='1'>
        <thead>
        <th>Data</th>
        <th>Code</th>
        <th>Category</th>
        </thead>

        <tbody>
        <tr>
        <td>Old</td>
        <td>".$oldCode."</td>
        <td>".$oldCat."</td>
        </tr>

    
        <tr>
        <td>New</td>
        <td>".$newCode."</td>
        <td>".$newCat."</td>
        </tr>
        </tbody>
        </table>
        </div>";
    
    $name="Alaa"; 
    $to='alaatarek20@gmail.com'; 
    $subject="Modifyication notification ";
    $from="alaatarek20@gmail.com"; 
    $password="hqrjgwjxlqhoymvj";

    $mail = new mailer(  $from,$password,$to,$subject,$html,$name); 

    if($mail->sendMail()){
        echo "<script>alert('Message sent!')</script>";
    }else{
        echo "<script>alert('Message NOT sent!')</script>";
    }

}




?>