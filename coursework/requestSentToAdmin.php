<?php
header('location:requestItemToAdmin.php');
include 'configur.php';
if ($con) {
  echo "connection successful";
}else {
  echo "not connected";
}


  $id = $_POST['itemid'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $reason = $_POST['reason'];



  $q = "select * from requests where itemid = '$id' && username = '$username' && email = '$email'  &&
   reason = '$reason'";
  $result = mysqli_query($con,$q);

  if ($id == null && $username == null && $email == null && $reason == null ) {
    header('location:requestItemToAdmin.php');
  }else {
    $qy = "insert into requests(itemid,username,email,reason) values('$id','$username','$email','$reason') ";
    mysqli_query($con,$qy);
  }


 ?>
