<?php
if(isset($_POST['email'])) {

 $email_to = "lpazdur07@gmail.com";
 $email_subject = "Approval1 - Contact form";

 function died($error) {
	 header("Location: /fail.html");
	 die();
 }


 if(!isset($_POST['name']) ||
	 !isset($_POST['email']) ||
	 !isset($_POST['message'])) {
	 died('We are sorry, but there appears to be a problem with the form you submitted.');       
 }

 $name = $_POST['name'];
 $email_from = $_POST['email']; 
 $message = $_POST['message']; 

 $email_message = "Contact form details below.\n\n";

 function clean_string($string) {
   $bad = array("content-type","bcc:","to:","cc:","href");
   return str_replace($bad,"",$string);
 }

 $email_message .= "Name: ".clean_string($name)."\n";
 $email_message .= "Email: ".clean_string($email_from)."\n";
 $email_message .= "Message: ".clean_string($message)."\n";


@mail($email_to, $email_subject, $email_message);  

header("Location: /success.html");

}
?>