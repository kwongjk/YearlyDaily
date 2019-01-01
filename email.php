<?php
console_Log("try");
  $first_name = $_POST['name'];
  $second_name = $_POST['surname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $to = "kwongjunkit9797@gmail.com";
    $subject = "Yearly Daily";
    $body = "Name = $first_name $second_name\n
    Phone Number = $phone\n
    Message:\n $message";
  $headers = "From: $email \r\n";

  mail($to,$subject,$body,$headers);
  
?>
