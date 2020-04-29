<?php
include 'dataConnec.php';


$to_email = $_POST['email'];
$subject = $_POST['status'];
$body = $_POST['reason'];
$headers = "From:abdullahi151099.com";

if (mail($to_email,$subject,$body,$headers)) {

  header('location:emailSent.php');

}else {
  header('location:issueEmail.php');

}

 ?>
