<?php
    $to = 'tusher10823@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $subject= $_POST["subject"];
    $message= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: subject/html; charset=iso-8859-1' . "\r\n";

    $subject ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$laststname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>message: '.$message.'</td></tr>
        <tr><td>Text: '.$subject.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $subject, $headers))
    {
        echo 'The subject has been sent.';
    }else{
        echo 'failed';
    }

?>
