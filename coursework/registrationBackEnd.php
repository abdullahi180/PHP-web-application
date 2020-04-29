<?php
session_start();
header('location:signIn.php');
include 'configur.php';
if ($con) {
  echo "connection successful";
}else {
  echo "not connected";
}
$email = $_POST['email'];
$name = $_POST['user'];
$pass = $_POST['pass'];








$q = "select * from signin where name = '$name' && password = '$pass' && email = '$email' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if ($num == 1) {
  echo "duplicate data";
}elseif ($name == null && $pass == null) {
  header('location:signIn.php');
}else {
  $qy = "insert into signin(name,password,email) values('$name','$pass','$email') ";
  mysqli_query($con,$qy);
}
?>
