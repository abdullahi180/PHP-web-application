<?php
include 'dataConnec.php';

$to_email = $_POST['email'];

$subject = $_POST['status'];
$body = $_POST['reason'];

$headers = "From:abdulahi151099@gmail.com";


if (mail($to_email,$subject,$body,$headers)) {

  
header('location:emailSent.php');

}else {
  header('location:issueEmail.php');

}

?>
