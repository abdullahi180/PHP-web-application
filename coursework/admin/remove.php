<?php

include 'dataConnec.php';

$id = $_GET['id'];

$q = " DELETE FROM `items` WHERE id = $id ";

mysqli_query($con, $q);

header('location:lostItemsListAdmin.php');

?>
