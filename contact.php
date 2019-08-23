<?php
   
        $name = $_POST['send_to'];
        $y_name = $_POST['send_t'];
        $visotor_email = $_POST['e-mail'];
        $message = $_POST['delivery'];
        $comment_b = $_POST['comment'];
        $success = "";


        $email_from = "hd1831@truman.edu";
        
        $email_subject = "New submition";

        $email_body = "Hello Trina you got a new buyer: $name.\n".
                       "You have to send you CashApp or Venmo to this User: $visotor_email.\n\n".
                        "User name: $name.\n".
                        "User y_name: $y_name.\n". 
                         "User email: $visotor_email.\n".
                          "User Delivery Info : $message.\n".
                           "User comment: $comment_b";

                         
        $to = "ir4516@truman.edu";          

        $headers = "From: $email_form \r\n";

        $headers .= "Replay-to: $visotor_email \r\n";

        

        if (mail($to, $email_subject, $email_body, $headers)){
           $success = "message send thank you for contaction us" ; 
        }


        header("Location: http://shoproses.space/?mailsend");

?>

