<?php


include 'dataConnec.php';


 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $username = $_POST['username'];
 $email = $_POST['email'];

$q =  " update signin set id=$id, name ='$username', password ='$password', email ='$email' where id=$id ";
 $query = mysqli_query($con,$q);



 header('location:registredUsers.php');
 }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
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
     background-attachment: fixed;
   }
    </style>
      <?php include 'links.php'?>
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


      </div>
    </nav>
<div class="heading text-center mb-5 text-uppercase text-white">
       EDIT USER

      </div>
    <div style="position:relative;top:50px;max-width:900px" class="container-fluid  p-4  " max-width:1250px>
      <div class="card ">
<form method="post">
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Username</label>
          <input type="text" name="username" value="" class="form-horizontal" pattern="[^\s]+" title="There must be no space between charcaters" required>

        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Email</label>
          <input type="email" name="email" value="" class="form-horizontal" required>
        </div>        </div>
        <input type="submit" class="btn btn-primary" name="done" value="submit"/>
      </form>
    </div>
  </div>
  </body>
</html>