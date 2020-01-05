<?php
    $to = 'email@akashpoudel.com.np';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>Sender Name:'.$name.' Subject: '.$subject.'</td>
        </tr>
        <tr><td>Sender Email: '.$email.'</td></tr>
        <tr><td>Sender Subject: '.$subject.'</td></tr>
        <tr><td>Sender Message: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }
    
    
     $message2 ='Dear<b> '.$name.' </b> We have received your Message We will respond you back soon';
mail($email, $email, $message2, $headers);

?>
