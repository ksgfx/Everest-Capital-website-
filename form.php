<?php
$name = $POST['name'];
$visitor_email = $POST['email'];
$subject = $POST['subject'];
$message = $POST['message'];





$email_from  = 'everestcapital2022@gmail.com'


$email_subject = 'New Form Submission';


$email_body = "User Name: $name. \n".
              "User Email: $visitor_email. \n".
              "Subject: $subject. \n".
              "User Message: $message. \n";



$to = 'krskaustubha123@gmail.com'


$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";



mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");




?>