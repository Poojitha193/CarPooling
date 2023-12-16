<?php

 $to_email = "sravanreddyxyz1@gmail.com";
 $subject = "Simple Email Testing via PHP";
 $body = "Hello,nn It is a testing email sent by PHP Script";
 $headers = "From: gunagantirajashekar@gmail.com";

 if (mail($to_email, $subject, $body, $headers)) {
   echo "Email successfully sent to $to_email...";
 } else {
   echo "Email sending failed...";
 }

?>