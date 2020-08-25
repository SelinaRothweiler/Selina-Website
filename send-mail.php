<?php
    $name_first = $_POST['name_first'];
    $name_last = $_POST['name_last'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'Selina Roth Contact Form';
    $email_subject = 'New Contact Request';
    $email_body = "First Name: $name_first \n".
                  "Last Name: $name_last \n".
                  "Phone Number: $phone \n".
                  "Email Address: $email \n".
                  "Subject: $subject \n".
                  "Message: $message \n";

    $to = "selina@selinaroth.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script>alert("Your email has been sent. Thank You!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">
</head>