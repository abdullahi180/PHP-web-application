<?php
session_start();

include 'configur.php';
if ($con) {
  echo "connection successful";
  header('location:signIn.php');

}else {
  echo "not connected";
}

$name = $_POST['user1'];


$pass = $_POST['pass1'];

$q = "select * from signin where name = '$name' && password = '$pass' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if ($num == 1) {
  $_SESSION['username'] = $name;
  header('location:regUserHomePage.php');
}elseif ($name == null && $pass == null) {
  header('location:signIn.php');
}

?>
