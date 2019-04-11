<?php
    $to = 'divyaratra1999@gmail.com';
    $name = $_POST["fname"];
    $type = $_POST["type"];
    $from = $_POST["email"];
    $amount = $_POST["amount"];
	$phone = $_POST["phone"];
	$phone2 = $_POST["phone2"];
	$address = $_POST["address"];
    $message = $_POST["message"];




    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$email.'</td>
        </tr>
        <tr><td>Type: '.$type.'</td></tr>
        <tr><td>Amount/Quantity: '.$amount.'</td></tr>
        <tr><td>Message: '.$message.'</td></tr>       
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }
	else{
        echo 'failed';
    }

?>
