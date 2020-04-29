<?php
session_start();
include 'configur.php';
if ($con) {

}else {
  echo "connection not success";
}

$query = "select * from items ";
$result = mysqli_query($con,$query);
?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <title>Lost Items</title>
     <link rel="stylesheet" type="text/css" href=".css/guest.css">
     <?php include 'links.php' ?>

     <style media="screen">
     body{
       background-image: url(img/los.jpg);

   color: white;
       background-size:cover;
       background-attachment: fixed; */
     }
     .heading{
      width: 100%;
      line-height:65px;
      font-size: 2.5rem;
      font-family: 'Oswald', sans-serif;
     }

     </style>
   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href="signIn.php">FiLo Systems</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="signIn.php">Home<span class="sr-only"></span></a>
           </li>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">

           <li class="nav-item active">
             <a class="nav-link" href="aboutUs.php">About</a>

             <li class="nav-item active">
               <a class="nav-link" href="lostItemsGuestPage.php">Lost Items<span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item active">
               <a class="nav-link" href="contactUs.php">Contact us <span class="sr-only"></span></a>
             </li>

           </li>

         </ul>

       </div>
     </nav>


     <div class="container centre-div"  >
       <div class="heading text-center mb-5 text-uppercase text-white">
         LOST ITEMS
       </div>


     <div style="position:relative;top:100px;" class="container bg-white p-4">

     <table  class="table table-striped table-hover table-bordered p-4 ">
       <tr>
          <th scope="col">ID</th>
          <th scope="col">Color</th>
          <th scope="col">Type</th>
          <th scope="col">Location</th>
       </tr>
       <?php
       while ($rows=mysqli_fetch_assoc($result))
       {
        ?>
         <tr>
            <td> <?php echo $rows['id']; ?></td>
            <td> <?php echo $rows['color']; ?></td>
            <td> <?php echo $rows['type']; ?></td>
            <td> <?php echo $rows['location']; ?></td>
        </tr>
        <?php
          }
       ?>
     </table>   </div>
   </body>
 </html>
