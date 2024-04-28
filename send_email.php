<?php
if(isset($_POST["contactForm"]) && isset($_POST["w3lSender"])){
    $to = $_POST["w3lSender"];
    $subject = @$_POST["w3lSubject"];
    $txt = @$_POST["w3lMessage"];
    $headers = "From: info@regardchemical.com.bd" . "\r\n" .
    "CC: mahfuzak08@gmail.com";

    $message = "
    <html>
    <head>
    <title>Email Query From Website</title>
    </head>
    <body>
    <table>
        <tr>
            <th style='text-align:left'>Sender Name</th>
            <td>". $_POST["w3lName"] ."</td>
        </tr>
        <tr>
            <th style='text-align:left'>Phone number</th>
            <td>". $_POST["w3lPhone"] ."</td>
        </tr>
        <tr>
            <th style='text-align:left'>Subject</th>
            <td>". $_POST["w3lSubject"] ."</td>
        </tr>
        <tr>
            <th style='text-align:left'>Message</th>
            <td>". $_POST["w3lMessage"] ."</td>
        </tr>
    </table>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <info@regardchemical.com.bd>' . "\r\n";
    $headers .= 'Cc: mahfuzak08@gmail.com' . "\r\n";

    if(mail($to,$subject,$message,$headers) != FALSE){
        header('Location: index.php');
    }
    header('Location: contact.php');
}
?>