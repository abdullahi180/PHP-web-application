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
     <title>Lost Items </title>
     <?php include 'links.php' ?>
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
       background-image: url(img/night.jpg);


       background-size:cover;
       background-attachment: fixed; 
     }
     </style>
   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href="regUserHomePage.php">FiLo Systems</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="regUserHomePage.php">Home<span class="sr-only"></span></a>
           </li>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="lostItemsListRegUser.php">Lost Items<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="createUser.php">Create</a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="requestItemToAdmin.php">Request item</a>
           </li>

         </ul>


       </div>
     </nav>
     <div style="position:relative;top:60px;left:900x;height:500px;" class="container centre-div shadow"  >
       <div class="heading text-center mb-5 text-uppercase text-white">
        LOST ITEMS

       </div>
     <div style="position:relative;top:100px;" class="container  bg-white" >
            <table   class="table table-striped table-hover table-bordered p-4 text-center ">
       <tr>
         <th scope="col">ID</th>
          <th scope="col">Color</th>
          <th scope="col">Type</th>
          <th scope="col">Location</th>
          <th scope="col">Date</th>
         <th scope="col">Description</th>
         <th scope="col">Image</th>

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
            <td> <?php echo $rows['date']; ?></td>
            <td> <?php echo $rows['description']; ?></td>
            <td> <img src=" <?php echo $rows['image'];?>" height="60px" width="60px"></td>

                    </tr>
        <?php
          }
       ?>
     </table>
   </div>
   </body>
 </html>
