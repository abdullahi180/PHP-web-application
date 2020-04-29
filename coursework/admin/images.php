
<?php


session_start();
$id = $_GET['id'];
include 'dataConnec.php';
if ($con) {
  //echo "connection success";
}else {
  echo "connection not success";
}

$query = "select * from items where id = $id";
$result = mysqli_query($con,$query);



?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <title>Images</title>
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
     <?php include 'links.php' ?>
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
             <a class="nav-link" href="lostItemsListAdmin.php">Lost Items<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="create.php">Create</a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="requestAdmin.php">Requests</a>
           </li>
<li class="nav-item active">
             <a class="nav-link" href="registredUsers">List Of Registred Users</a>
           </li>

         </ul>

        <form class="form-inline my-2 my-lg-0">
       <a class="btn btn-success" href="adminHome.php">Home</a>
     </form>
       </div>
     </nav>


     <div style="position:relative;top:60px;left:800x;height:500px;" class="container centre-div"  >
       <div class="heading text-center mb-5 text-uppercase text-white">
      LOST ITEM

       </div>
     <div style="position:relative;top:100px;" class="container bg-white">

     <table   class="table table-striped table-hover table-bordered p-4 text-center ">
       <tr>

         <th scope="col">Image</th>

       </tr>
       <?php
       while ($rows=mysqli_fetch_assoc($result))
       {
        ?>
         <tr>

            <td> <img src=" <?php echo $rows['image'];?>" height="100px" width="100px"></td>

        <?php
          }
       ?>
     </table>
   </div>
   </body>
 </html>