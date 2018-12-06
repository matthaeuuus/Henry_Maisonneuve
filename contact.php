<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "Henry-Maisons-Neuves@gmail.com";
    $headers="From: $email";
    mail($to,$name,$email,$message,$headers);
?>