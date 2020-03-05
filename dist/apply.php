<?php
if(isset($_POST['email'])) {

 $email_to = "mail@mail.com";
 $email_subject = "Approval 1 - Apply form";

 function died($error) {
	 header("Location: /fail.html");
	 die();
 }


 if(!isset($_POST['province']) ||
	 !isset($_POST['city']) ||
	 !isset($_POST['postalCode']) ||
	 !isset($_POST['address']) ||
	 !isset($_POST['owningType']) ||
	 !isset($_POST['mortgage']) ||
	 !isset($_POST['length']) ||
	 !isset($_POST['email']) ||
	 !isset($_POST['cellPhone']) ||
	 !isset($_POST['homePhone']) ||
	 !isset($_POST['vehicleType']) ||
	 !isset($_POST['favBrand']) ||
	 !isset($_POST['occupation']) ||
	 !isset($_POST['employer']) ||
	 !isset($_POST['lengthEmployer']) ||
	 !isset($_POST['bday']) ||
	 !isset($_POST['ownVehicle']) ||
	 !isset($_POST['vehFinanced'])
	 ) {
	 died('We are sorry, but there appears to be a problem with the form you submitted.');       
 }

 $province = $_POST['province'];
 $city = $_POST['city']; 
 $postalCode = $_POST['postalCode']; 
 $address = $_POST['address'];
 $owningType = $_POST['owningType']; 
 $mortgage = $_POST['mortgage']; 
 $length = $_POST['length'];
 $email_from = $_POST['email']; 
 $cellPhone = $_POST['cellPhone']; 
 $homePhone = $_POST['homePhone'];
 $vehicleType = $_POST['vehicleType']; 
 $favBrand = $_POST['favBrand']; 
 $occupation = $_POST['occupation'];
 $employer = $_POST['employer']; 
 $lengthEmployer = $_POST['lengthEmployer']; 
 $bday = $_POST['bday'];
 $ownVehicle = $_POST['ownVehicle']; 
 $vehFinanced = $_POST['vehFinanced']; 

 $email_message = "Apply form details below.\n\n";

  
 function clean_string($string) {
   $bad = array("content-type","bcc:","to:","cc:","href");
   return str_replace($bad,"",$string);
 }


 $email_message .= "Province: ".clean_string($province)."\n";
 $email_message .= "City: ".clean_string($city)."\n";
 $email_message .= "Postal Code: ".clean_string($postalCode)."\n";
 $email_message .= "Address: ".clean_string($address)."\n";
 $email_message .= "Own or rent: ".clean_string($owningType)."\n";
 $email_message .= "Monthly rent/mortgage: ".clean_string($mortgage)."\n";
 $email_message .= "Length of time at residence: ".clean_string($length)."\n";
 $email_message .= "Email: ".clean_string($email_from)."\n";
 $email_message .= "Cell Phone Number: ".clean_string($cellPhone)."\n";
 $email_message .= "Home Phone Number: ".clean_string($homePhone)."\n";
 $email_message .= "Vehicle Type: ".clean_string($vehicleType)."\n";
 $email_message .= "Favourite Brand: ".clean_string($favBrand)."\n";
 $email_message .= "Occupation: ".clean_string($occupation)."\n";
 $email_message .= "Employer: ".clean_string($employer)."\n";
 $email_message .= "Length of time with employer: ".clean_string($lengthEmployer)."\n";
 $email_message .= "Birthday: ".clean_string($bday)."\n";
 $email_message .= "Currently own a vehicle: ".clean_string($ownVehicle)."\n";
 $email_message .= "Is vehicle financed: ".clean_string($vehFinanced)."\n";


@mail($email_to, $email_subject, $email_message);  

header("Location: /success.html");

}
?>