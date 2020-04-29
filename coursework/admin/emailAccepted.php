<?php


session_start();
$id = $_GET['id'];
include 'dataConnec.php';
if ($con) {

}else {
  echo "connection not success";
}

$query = "select * from requests where id = $id";
$result = mysqli_query($con,$query);



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Accepted Email</title>
    <?php include 'links.php'?>
<style media="screen">
*{
  margin: 0;
  padding:0;
}
.heading{
 width: 100%;
 line-height:65px;
 font-size: 2.5rem;
 font-family: 'Oswald', sans-serif;

}

body{
     background-image: url(../img/night.jpg);


     background-size:cover;
     background-attachment: fixed; */
   }
</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="adminHome.php">FiLo Systems</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="adminHome.php">Home<span class="sr-only"></span></a>
          </li>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="lostItemsListAdmin.php">Lost Items<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="create.php">Create</a>
          </li>
                  <li class="nav-item active">
            <a class="nav-link" href="requestAdmin.php">Requests</a>
          </li>
<li class="nav-item active">
             <a class="nav-link" href="registredUsers.php">List Of Registred Users</a>
           </li>


        </ul>


    </form>
      </div>
    </nav>

  <div style="position:relative;top:60px;left:800x;height:500px;" class="container centre-div"  >
      <div class="heading text-center mb-5 text-uppercase text-white">
       Email

      </div>
    <?php
    while ($rows=mysqli_fetch_assoc($result))
    {

     ?>
    
     <div style="position:relative;top:50px;max-width:700px" class="container-fluid  p-4  " max-width:1250px>
       <div style="position:relative;height:300px;" class="card">
       <form action="acceptemail.php" method="post">
         <div class="form-horizontal">
           <div class="col-md-8">
           <label>Email</label>
            <input type="text" name="email" value= <?php  echo $rows['email']; ?>><br> </br>
         </div>
         </div>
         <div class="form-horizontal">
           <div class="col-md-8">
           <label>Status</label>
           <input type="text" name="status" value= "Approved">
         </div>
         </div>
         <div class="form-horizontal">
           <div class="col-md-8">
           <label>Description</label>
           <textarea class="form-control" name="reason" cols="50" rows="3">Your request has been granted..</textarea></br>
         </div>
         <div class="col-md-6 col-md-offset-4">
         <input type="submit" value="Send" class="btn btn-primary" />
         </div>
         </div>
       </form>
     </div>
   </div>
   
     <?php

       }
    ?>

  </body>
</html>
