<?php
if(isset($_POST['send'])) {
    $to_email = 'nfontatah @ company . com';
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: ' . $email ;
}

mail($to_email,$subject,$message,$headers);
?>